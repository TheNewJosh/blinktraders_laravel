<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\PaymentGateway;
use App\Http\Controllers\Controller;

class DepositController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }
    
    public function index()
    {
        $paymentGateway = PaymentGateway::where('status', 1)->get();

        $user = User::find(auth()->user()->id);
        
        return view('user.deposit', [
            'paymentGateway' => $paymentGateway,
            'user' => $user,
        ]);
    }
}
