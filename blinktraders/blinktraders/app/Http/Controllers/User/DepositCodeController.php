<?php

namespace App\Http\Controllers\User;

use App\Models\Transactions;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DepositCodeController extends Controller
{
    public function __construct()
    {
        $this->middleware(['role:user|superadministrator']);
    }
    
    public function index(Transactions $transactions_id)
    {
        return view('user.depositCode', [
            'transactions_id' => $transactions_id,
        ]);
    }
}
