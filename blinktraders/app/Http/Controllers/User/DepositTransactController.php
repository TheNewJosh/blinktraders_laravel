<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use App\Models\Transactions;
use Illuminate\Http\Request;
use App\Models\PaymentGateway;
use App\Models\SystemConfiguration;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class DepositTransactController extends Controller
{
    public function __construct()
    {
        $this->middleware(['role:user|superadministrator']);
    }
    
    public function index(PaymentGateway $payment_id)
    {
        $systemConfiguration = SystemConfiguration::find(1)->first();

        $user = User::find(auth()->user()->id);

        return view('user.depositTransact', [
            'payment_id' => $payment_id,
            'system_configuration' => $systemConfiguration,
            'user' => $user,
        ]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'amount' => 'required',
        ]);

        if($validator->fails()) {
            return back()->with('statusdepositPaymentgate', 'Input error')->withErrors($validator)->withInput();
        }else{
            $reference_id = $request->user_id."#".uniqid()."wd";

            $transactions = Transactions::create([
                'amount' => $request->amount,
                'charges' => $request->charges,
                'coin_amount' => $request->coin_amount,
                'payment_gateway_id' => $request->payment_gateway_id,
                'user_id' => $request->user_id,
                'wallet_address' => $request->wallet_address,
                'reference_id' => $reference_id,
                'percent' => $request->percent,
                'transact_type' => 0,
            ]);
    
            return redirect()->route('depositCode', ['transactions_id' => $transactions->id])->with('statusdepositPaymentgateSuccess', 'Success');
        }
    }
}
