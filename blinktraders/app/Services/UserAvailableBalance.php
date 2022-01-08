<?php

namespace App\Services;

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
        $trn_withdraw = Transactions::where('user_id', auth()->user()->id)->Where('transact_type', '=', 1)->Where('withdraw_source', '=', 0)->Where('status', '=', 1)->get()->sum('amount');
        $trn_copytrade = CopyTrade::where('user_id', auth()->user()->id)->Where('status', '=', 1)->get()->sum('amount');
        $trn_masterclass = MasterClass::where('user_id', auth()->user()->id)->Where('status', '=', 1)->get()->sum('amount');
        $trn_invptran = InvestPackTransaction::where('user_id', auth()->user()->id)->Where('status', '=', 1)->get()->sum('amount');
        $trn_sum_ava = $trn_deposit - $trn_withdraw - $trn_copytrade - $trn_invptran - $trn_masterclass;

        return $trn_sum_ava;
    }

    public function getAvailableBalanceProfit()
    {
        $trn_invest = InvestPackTransaction::where('user_id', auth()->user()->id)->Where('status', '=', 1)->get()->sum('total');
        $trn_withdraw_profit = Transactions::where('user_id', auth()->user()->id)->Where('transact_type', '=', 1)->Where('withdraw_source', '=', 1)->Where('status', '=', 1)->get()->sum('amount');
        $trn_sum_ava = $trn_invest - $trn_withdraw_profit;

        return $trn_sum_ava;
    }

    public function getAvailableBalanceReferral()
    {
        $trn_referral = Referrals::where('user_id', auth()->user()->id)->get()->sum('amount');
        $trn_withdraw_referral = Transactions::where('user_id', auth()->user()->id)->Where('transact_type', '=', 1)->Where('withdraw_source', '=', 2)->Where('status', '=', 1)->get()->sum('amount');
        $trn_sum_ava = $trn_referral - $trn_withdraw_referral;

        return $trn_sum_ava;
    }
}