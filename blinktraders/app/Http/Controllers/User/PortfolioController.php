<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use App\Models\Transactions;
use Illuminate\Http\Request;
use App\Models\PaymentGateway;
use App\Http\Controllers\Controller;
use App\Models\InvestPackTransaction;
use App\Services\UserAvailableBalance;

class PortfolioController extends Controller
{
    public function __construct()
    {
        $this->middleware(['role:user|superadministrator']);
    }
    
    public function index()
    {
        $userAvailableBalance = UserAvailableBalance::getAvailableBalance();
        $userAvailableBalanceProfit = UserAvailableBalance::getAvailableBalanceProfit();
        $userAvailableBalanceReferral = UserAvailableBalance::getAvailableBalanceReferral();
        
        $transaction = Transactions::where('user_id', auth()->user()->id)->get();
        $investPackTransaction = InvestPackTransaction::where('user_id', auth()->user()->id)->where('status', 1)->get();
        
        $paymentGateway = PaymentGateway::where('status', 1)->orderBy('id', 'ASC')->get();
        $user_ref = User::where('referral_user', auth()->user()->id)->get();
        $user = User::find(auth()->user()->id);
        
        return view('user.portfolio', [
            'userAvailableBalance' => $userAvailableBalance,
            'userAvailableBalanceProfit' => $userAvailableBalanceProfit,
            'userAvailableBalanceReferral' => $userAvailableBalanceReferral,
            'transaction' => $transaction,
            'paymentGateway' => $paymentGateway,
            'investPackTransaction' => $investPackTransaction,
            'user_ref' => $user_ref,
            'user' => $user,
        ]);
    }
}
