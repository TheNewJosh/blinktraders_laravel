<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use App\Models\Transactions;
use Illuminate\Http\Request;
use App\Models\PaymentGateway;
use App\Http\Controllers\Controller;

class WithdrawController extends Controller
{
    public function __construct()
    {
        $this->middleware(['role:user|superadministrator']);
    }
    
    public function index()
    {
        $paymentGateway = PaymentGateway::where('status', 1)->orderBy('id', 'ASC')->get();

        $user = User::find(auth()->user()->id);
        
        return view('user.withdraw', [
            'paymentGateway' => $paymentGateway,
            'user' => $user,
        ]);
    }
    public function code(Transactions $transactions_id, $charge)
    {
        return view('user.withdrawCode', [
            'transactions_id' => $transactions_id,
            'charge' => $charge,
        ]);
    }
}
