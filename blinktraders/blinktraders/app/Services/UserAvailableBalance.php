<?php

namespace App\Services;

use App\Models\User;
use App\Models\CopyTrade;
use App\Models\Referrals;
use App\Models\MasterClass;
use App\Models\Transactions;
use App\Models\InvestPackTransaction;

class UserAvailableBalance
{
    public function getAvailableBalance()
    {
        $trn_deposit = Transactions::where('user_id', auth()->user()->id)->Where('transact_type', '=', 0)->Where('status', '=', 1)->get()->sum('amount');
        $trn_withdraw = Transactions::where('user_id', auth()->user()->id)->Where('transact_type', '=', 1)->Where('withdraw_source', '=', 0)->Where('status', '<', 2)->get()->sum('amount');
        $trn_copytrade = CopyTrade::where('user_id', auth()->user()->id)->Where('status', '=', 1)->get()->sum('amount');
        $trn_masterclass = MasterClass::where('user_id', auth()->user()->id)->Where('status', '=', 1)->get()->sum('amount');
        $trn_invptran = InvestPackTransaction::where('user_id', auth()->user()->id)->Where('status', '=', 1)->get()->sum('amount');
        $upgrade_fee = User::where('id', auth()->user()->id)->get()->first()->upgrade_account_amount;
        $signup_fee = User::where('id', auth()->user()->id)->get()->first()->signup_fee;
        $adj_fee = User::where('id', auth()->user()->id)->get()->first()->adj_fee;
        $trn_sum_ava = $trn_deposit - $trn_withdraw - $trn_copytrade - $trn_invptran - $trn_masterclass - $upgrade_fee + $signup_fee + ($adj_fee);

        return $trn_sum_ava;
    }

    public function getAvailableBalanceID($user_id)
    {
        $trn_deposit = Transactions::where('user_id', $user_id)->Where('transact_type', '=', 0)->Where('status', '=', 1)->get()->sum('amount');
        $trn_withdraw = Transactions::where('user_id', $user_id)->Where('transact_type', '=', 1)->Where('withdraw_source', '=', 0)->Where('status', '<', 2)->get()->sum('amount');
        $trn_copytrade = CopyTrade::where('user_id', $user_id)->Where('status', '=', 1)->get()->sum('amount');
        $trn_masterclass = MasterClass::where('user_id', $user_id)->Where('status', '=', 1)->get()->sum('amount');
        $trn_invptran = InvestPackTransaction::where('user_id', $user_id)->Where('status', '=', 1)->get()->sum('amount');
        $upgrade_fee = User::where('id', $user_id)->get()->first()->upgrade_account_amount;
        $signup_fee = User::where('id', $user_id)->get()->first()->signup_fee;
        $adj_fee = User::where('id', $user_id)->get()->first()->adj_fee;
        $trn_sum_ava = $trn_deposit - $trn_withdraw - $trn_copytrade - $trn_invptran - $trn_masterclass - $upgrade_fee + $signup_fee + ($adj_fee);

        return $trn_sum_ava;
    }

    public function getAvailableBalanceProfit()
    {
        $now = date('Y-m-d h:i:s', time());
        $trn_invest = InvestPackTransaction::where('user_id', auth()->user()->id)->Where('status', '=', 1)->Where('end_date', '<=', $now)->get()->sum('total');
        $trn_withdraw_profit = Transactions::where('user_id', auth()->user()->id)->Where('transact_type', '=', 1)->Where('withdraw_source', '=', 1)->Where('status', '<', 2)->get()->sum('amount');
        $adj_fee = User::where('id', auth()->user()->id)->get()->first()->adjp_fee;
        $trn_sum_ava = $trn_invest - $trn_withdraw_profit + ($adj_fee);

        return $trn_sum_ava;
    }

    public function getAvailableBalanceProfitID($user_id)
    {
        $now = date('Y-m-d h:i:s', time());
        $trn_invest = InvestPackTransaction::where('user_id', $user_id)->Where('status', '=', 1)->Where('end_date', '<=', $now)->get()->sum('total');
        $trn_withdraw_profit = Transactions::where('user_id', $user_id)->Where('transact_type', '=', 1)->Where('withdraw_source', '=', 1)->Where('status', '<', 2)->get()->sum('amount');
        $adj_fee = User::where('id', $user_id)->get()->first()->adjp_fee;
        $trn_sum_ava = $trn_invest - $trn_withdraw_profit + ($adj_fee);

        return $trn_sum_ava;
    }

    public function getAvailableProfitID($id)
    {
        $now = date('Y-m-d h:i:s', time());
        $trn_invest = InvestPackTransaction::where('id', $id)->get()->first();
        if($trn_invest->end_date > $now){
            $diff = strtotime($trn_invest->end_date) - strtotime($now);
            $res = $trn_invest->duration - abs(round($diff / 86400));
            $profit = $trn_invest->profit * $res;

            return $profit;
        }else{
            return $trn_invest->total;
        }
    }
    
    public function getAvailableProfitPercentage($id)
    {
        $now = date('Y-m-d h:i:s', time());
        $trn_invest = InvestPackTransaction::where('id', $id)->get()->first();
        if($trn_invest->end_date > $now){
            $diff = strtotime($trn_invest->end_date) - strtotime($now);
            $res = $trn_invest->duration - abs(round($diff / 86400));
            $profit = $trn_invest->percentage * $res;

            return $profit;
        }else{
            return $trn_invest->percentage * $trn_invest->duration;
        }
    }
    
    public function getAvailableProfitPercentageEnd($id)
    {
        $now = date('Y-m-d h:i:s', time());
        $trn_invest = InvestPackTransaction::where('id', $id)->get()->first();
        if($trn_invest->end_date > $now){
            return "In Progress";
        }else{
            return "Ended";
        }
    }

    public function getAvailableBalanceReferral()
    {
        $trn_referral = Referrals::where('user_id', auth()->user()->id)->get()->sum('amount');
        $trn_withdraw_referral = Transactions::where('user_id', auth()->user()->id)->Where('transact_type', '=', 1)->Where('withdraw_source', '=', 2)->Where('status', '<', 2)->get()->sum('amount');
        $adj_fee = User::where('id', auth()->user()->id)->get()->first()->adjr_fee;
        $trn_sum_ava = $trn_referral - $trn_withdraw_referral + ($adj_fee);

        return $trn_sum_ava;
    }

    public function getAvailableBalanceReferralID($user_id)
    {
        $trn_referral = Referrals::where('user_id', $user_id)->get()->sum('amount');
        $trn_withdraw_referral = Transactions::where('user_id', $user_id)->Where('transact_type', '=', 1)->Where('withdraw_source', '=', 2)->Where('status', '<', 2)->get()->sum('amount');
        $adj_fee = User::where('id', $user_id)->get()->first()->adjr_fee;
        $trn_sum_ava = $trn_referral - $trn_withdraw_referral + ($adj_fee);

        return $trn_sum_ava;
    }
}