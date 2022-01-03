<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use App\Models\Referrals;
use App\Models\Transactions;
use Illuminate\Http\Request;
use App\Models\PaymentGateway;
use App\Http\Controllers\Controller;
use App\Models\InvestPackTransaction;

class PortfolioController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }
    
    public function index()
    {
        $trn_deposit = Transactions::where('user_id', auth()->user()->id)->Where('transact_type', '=', 0)->Where('status', '=', 1)->get();
        $trn_withdraw = Transactions::where('user_id', auth()->user()->id)->Where('transact_type', '=', 1)->Where('withdraw_source', '=', 0)->Where('status', '=', 1)->get();
        
        $trn_invest = InvestPackTransaction::where('user_id', auth()->user()->id)->Where('status', '=', 1)->get();
        $trn_withdraw_profit = Transactions::where('user_id', auth()->user()->id)->Where('transact_type', '=', 1)->Where('withdraw_source', '=', 1)->Where('status', '=', 1)->get();
        
        $trn_referral = Referrals::where('user_id', auth()->user()->id)->get();
        $trn_withdraw_referral = Transactions::where('user_id', auth()->user()->id)->Where('transact_type', '=', 1)->Where('withdraw_source', '=', 2)->Where('status', '=', 1)->get();
        
        $transaction = Transactions::where('user_id', auth()->user()->id)->get();

        $user_ref = User::get();
        
        $investPackTransaction = InvestPackTransaction::where('user_id', auth()->user()->id)->where('status', 1)->get();

        $paymentGateway = PaymentGateway::where('status', 1)->get();
        $user = User::find(auth()->user()->id);
        
        return view('user.portfolio', [
            'trn_deposit' => $trn_deposit,
            'trn_withdraw' => $trn_withdraw,
            'trn_invest' => $trn_invest,
            'trn_withdraw_profit' => $trn_withdraw_profit,
            'trn_referral' => $trn_referral,
            'trn_withdraw_referral' => $trn_withdraw_referral,
            'transaction' => $transaction,
            'paymentGateway' => $paymentGateway,
            'user' => $user,
            'user_ref' => $user_ref,
            'investPackTransaction' => $investPackTransaction,
        ]);
    }
}
