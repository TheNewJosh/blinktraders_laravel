<?php

namespace App\Http\Controllers\Admin;

use App\Models\Transactions;
use App\Models\User;
use App\Mail\WithdrawalSuccess;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;


class WithdrawLogController extends Controller
{
    public function __construct()
    {
        $this->middleware(['role:superadministrator']);
    }
    
    public function index()
    {
        $transactions = Transactions::where('transact_type', 1)->orderBy('id', 'DESC')->get();
        return view('admin.withdrawLog', [
            'transactions' => $transactions,
            'status' => "all",
        ]);
    }
    
    public function status($status)
    {
        $transactions = Transactions::where('transact_type', 0)->where('status', $status)->orderBy('id', 'DESC')->get(); 

        return view('admin.withdrawLog', [
            'transactions' => $transactions,
            'status' => $status,
        ]);
    }

    public function update(Request $request)
    { 
        Transactions::where('id', $request->id)->update([
            'status' => $request->status,
        ]);
        
        $transact_id = Transactions::find($request->id);
        $user_id = User::find($transact_id->user_id);
        if($request->status == 1){
            Mail::to($user_id->email)->send(new WithdrawalSuccess($user_id, $transact_id));
        }
        if($request->status == 0){
            Mail::to($user_id->email)->send(new WithdrawalRequested($user_id, $transact_id));
        }

        return redirect()->back()->with('statusUpdateSuccess', 'Success');
    }
}
