<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\InvestPackTransaction;

class InvestPlanTransactionController extends Controller
{
    public function index()
    {
        $investPackTransaction = InvestPackTransaction::where('status', 1)->get();

        return view('admin.investPlanTransact', [
            'investPackTransaction' => $investPackTransaction,
            'status' => "invest-plan-transact.php",
        ]);
    }
    
    public function completed()
    {
        $now = date('Y-m-d h:i:s', time());
        $investPackTransaction = InvestPackTransaction::where('end_date', '<=', $now)->get();

        return view('admin.investPlanTransact', [
            'investPackTransaction' => $investPackTransaction,
            'status' => "invest-plan-transact-comp.php",
        ]);
    }

    public function update(Request $request)
    { 
        InvestPackTransaction::where('id', $request->id)->update([
            'status' => $request->status,
        ]);

        return redirect()->back()->with('statusUpdateSuccess', 'Success');
    }
}
