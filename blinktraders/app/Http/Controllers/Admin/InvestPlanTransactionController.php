<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\InvestPackTransaction;

class InvestPlanTransactionController extends Controller
{
    public function index()
    {
        $investPackTransaction = InvestPackTransaction::where('status', 0)->get();

        return view('admin.investPlanTransact', [
            'investPackTransaction' => $investPackTransaction,
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
