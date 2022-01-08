<?php

namespace App\Http\Controllers\Admin;

use App\Models\Transactions;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WithdrawLogController extends Controller
{
    public function __construct()
    {
        $this->middleware(['role:superadministrator']);
    }
    
    public function index()
    {
        $transactions = Transactions::where('transact_type', 1)->get();
        return view('admin.withdrawLog', [
            'transactions' => $transactions,
        ]);
    }

    public function update(Request $request)
    { 
        Transactions::where('id', $request->id)->update([
            'status' => $request->status,
        ]);

        return redirect()->back()->with('statusUpdateSuccess', 'Success');
    }
}
