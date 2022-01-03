<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use App\Models\Referrals;
use App\Models\Transactions;
use Illuminate\Http\Request;
use App\Models\PaymentGateway;
use App\Models\SystemConfiguration;
use App\Http\Controllers\Controller;
use App\Models\InvestPackTransaction;
use Illuminate\Support\Facades\Validator;

class WithdrawTransactController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }
    
    public function index(PaymentGateway $payment_id)
    {
        $trn_deposit = Transactions::where('user_id', auth()->user()->id)->Where('payment_gateway_id', '=', $payment_id->id)->Where('transact_type', '=', 0)->Where('status', '=', 1)->get()->sum('amount');
        $trn_withdraw = Transactions::where('user_id', auth()->user()->id)->Where('payment_gateway_id', '=', $payment_id->id)->Where('transact_type', '=', 1)->Where('withdraw_source', '=', 0)->Where('status', '=', 1)->get()->sum('amount');
        $trn_sum_ava = $trn_deposit - $trn_withdraw;

        $trn_invest = InvestPackTransaction::where('user_id', auth()->user()->id)->Where('status', '=', 1)->get()->sum('profit');
        $trn_withdraw_profit = Transactions::where('user_id', auth()->user()->id)->Where('transact_type', '=', 1)->Where('withdraw_source', '=', 1)->Where('status', '=', 1)->get()->sum('amount');
        $trn_sum_pro = $trn_invest - $trn_withdraw_profit;

        $trn_referral = Referrals::where('user_id', auth()->user()->id)->get()->sum('amount');
        $trn_withdraw_referral = Transactions::where('user_id', auth()->user()->id)->Where('transact_type', '=', 1)->Where('withdraw_source', '=', 2)->Where('status', '=', 1)->get()->sum('amount');
        $trn_sum_ref = $trn_referral - $trn_withdraw_referral;

        $systemConfiguration = SystemConfiguration::find(1)->first();

        $user = User::find(auth()->user()->id);

        return view('user.withdrawTransact', [
            'payment_id' => $payment_id,
            'system_configuration' => $systemConfiguration,
            'user' => $user,
            'trn_sum_ava' => $trn_sum_ava,
            'trn_sum_pro' => $trn_sum_pro,
            'trn_sum_ref' => $trn_sum_ref,
        ]);
    }

    public function store(Request $request)
    {
        if($request->withdraw_source == 0){
            if($request->amount > $request->trn_sum_ava){
                return back()->with('statusError', 'Input error');
            }
        }

        if($request->withdraw_source == 1){
            if($request->amount > $request->trn_sum_pro){
                return back()->with('statusError', 'Input error');
            }
        }

        if($request->withdraw_source == 2){
            if($request->amount > $request->trn_sum_ref){
                return back()->with('statusError', 'Input error');
            }
        }

        $validator = Validator::make($request->all(), [
            'amount' => 'required',
            'wallet_address' => 'required',
        ]);

        if($validator->fails()) {
            return back()->with('statusError', 'Input error')->withErrors($validator)->withInput();
        }else{
            $reference_id = $request->user_id."#".uniqid()."wd";

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
                'status' => 2,
            ]);
    
            return redirect()->back()->with('statusSuccess', 'Success')->with('statusID', $transactions->id);
        }
    }

    public function confirm(Request $request)
    {
        $pin = $request->pin1 . $request->pin2 . $request->pin3 . $request->pin4;

        if($pin != $request->pin) {
            return back()->with('statusErrorPin', 'Input error')->with('statusID', $request->id);
        }else{
            Transactions::where('id', $request->id)->update([
                'status' => 0,
            ]);

            return redirect()->back()->with('statusSuccessSS', 'Success');;
        }
    }
}
