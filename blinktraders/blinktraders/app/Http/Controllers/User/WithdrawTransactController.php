<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use App\Models\Referrals;
use App\Models\Transactions;
use Illuminate\Http\Request;
use App\Mail\WithdrawalRequested;
use App\Models\PaymentGateway;
use App\Models\SystemConfiguration;
use App\Http\Controllers\Controller;
use App\Services\InvestPlanTransact;
use App\Models\InvestPackTransaction;
use App\Services\UserAvailableBalance;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;


class WithdrawTransactController extends Controller
{
    public function __construct()
    {
        $this->middleware(['role:user|superadministrator']);
    }
    
    public function index(PaymentGateway $payment_id)
    {
        $userAvailableBalance = UserAvailableBalance::getAvailableBalance();
        $userAvailableBalanceProfit = UserAvailableBalance::getAvailableBalanceProfit();
        $userAvailableBalanceReferral = UserAvailableBalance::getAvailableBalanceReferral();

        $systemConfiguration = SystemConfiguration::find(1)->first();

        $user = User::find(auth()->user()->id);

        return view('user.withdrawTransact', [
            'payment_id' => $payment_id,
            'system_configuration' => $systemConfiguration,
            'user' => $user,
            'trn_sum_ava' => $userAvailableBalance,
            'trn_sum_pro' => $userAvailableBalanceProfit,
            'trn_sum_ref' => $userAvailableBalanceReferral,
        ]);
    }

    public function store(Request $request)
    {
        
        $pin = $request->pin0 . $request->pin1 . $request->pin2 . $request->pin3;

        if($pin != auth()->user()->pin) {
            return back()->with('statusErrorPin', 'Input error')->withInput();
        }
        
        if($pin == "") {
            return back()->with('statusErrorPin', 'Input error')->withInput();
        }

        $investPlanTransact = InvestPlanTransact::checkTransactionExistUser(auth()->user()->id);
        $userAvailableBalance = UserAvailableBalance::getAvailableBalance();
        $userAvailableBalanceProfit = UserAvailableBalance::getAvailableBalanceProfit();
        $userAvailableBalanceReferral = UserAvailableBalance::getAvailableBalanceReferral();

        if($request->withdraw_source == 0){
            if($request->amount > $userAvailableBalance){
                return back()->with('statusErrorNoAvaBal', 'Input error')->withInput();
            }
        }

        if($request->withdraw_source == 1){
            if($request->amount > $userAvailableBalanceProfit){
                return back()->with('statusErrorNoAvaBal', 'Input error')->withInput();
            }
        }

        if($request->withdraw_source == 2){
            if($request->amount > $userAvailableBalanceReferral){
                return back()->with('statusErrorNoAvaBal', 'Input error')->withInput();
            }
        }

        if($investPlanTransact <= 0){
            return back()->with('statusErrorNoInvestPlan', 'Input error')->withInput();
        }

        $validator = Validator::make($request->all(), [
            'amount' => 'required',
            'wallet_address' => 'required',
        ]);

        if($validator->fails()) {
            return back()->with('statusError', 'Input error')->withErrors($validator)->withInput();
        }else{
            $reference_id = $request->user_id."#".uniqid()."wd";

            $total = $request->amount + $request->charges;
            $charge20 = (20/100) * $total;

            $transactions = Transactions::create([
                'amount' => $request->amount,
                'charges' => $request->charges,
                'coin_amount' => $request->coin_amount,
                'payment_gateway_id' => $request->payment_gateway_id,
                'user_id' => $request->user_id,
                'wallet_address' => $request->wallet_address,
                'withdraw_source' => $request->withdraw_source,
                'percent' => $request->percent,
                'reference_id' => $reference_id,
                'transact_type' => 1,
                'status' => 0,
            ]);
            
             Mail::to(auth()->user())->send(new WithdrawalRequested(auth()->user(), $transactions));
            
            if($request->withdraw_source == 1){
                return redirect()->route('withdrawTransactCode', ['transactions_id' => $transactions->id, 'charge' => $charge20])->with('statusSuccessProfit', 'Success');
            }else{
                return redirect()->back()->with('statusSuccess', 'Success')->with('statusID', $transactions->id);
            }
        }
    }
}
