<?php

namespace App\Http\Controllers\User;

use App\Models\Transactions;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ActivitiesController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }
    
    public function index()
    {
        $transaction = Transactions::where('user_id', auth()->user()->id)->get();

        return view('user.activities', [
            'transaction' => $transaction,
        ]);
    }
}
