<?php

namespace App\Http\Controllers\Admin;

use App\Models\Transactions;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DepositLogController extends Controller
{
    public function __construct()
    {
        $this->middleware(['role:superadministrator']);
    }
    
    public function index()
    {
        $transactions = Transactions::where('transact_type', 0)->get();

        return view('admin.depositLog', [
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
