<?php

namespace App\Http\Controllers\User;

use App\Models\CopyTrade;
use App\Models\MasterClass;
use App\Models\Transactions;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\InvestPackTransaction;

class ActivitiesController extends Controller
{
    public function __construct()
    {
        $this->middleware(['role:user|superadministrator']);
    }
    
    public function index()
    {
        $transaction = Transactions::where('user_id', auth()->user()->id)->get();
        $copyTrade = CopyTrade::where('user_id', auth()->user()->id)->get();
        $masterClass = MasterClass::where('user_id', auth()->user()->id)->get();
        $investPackTransaction = InvestPackTransaction::where('user_id', auth()->user()->id)->get();

        return view('user.activities', [
            'transaction' => $transaction,
            'copyTrade' => $copyTrade,
            'masterClass' => $masterClass,
            'investPackTransaction' => $investPackTransaction,
        ]);
    }
}
