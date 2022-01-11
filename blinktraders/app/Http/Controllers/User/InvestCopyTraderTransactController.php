<?php

namespace App\Http\Controllers\User;

use App\Models\CopyTrade;
use App\Models\Transactions;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\InvestPlanTransact;
use App\Models\InvestPackTransaction;
use App\Services\UserAvailableBalance;
use Illuminate\Support\Facades\Validator;

class InvestCopyTraderTransactController extends Controller
{
    public function __construct()
    {
        $this->middleware(['role:user|superadministrator']);
    }
    
    public function index()
    {
        $CopyTrade = CopyTrade::where('user_id', auth()->user()->id)->get()->first();

        return view('user.investCopyTraderTransact', [
            'mt4' => $CopyTrade,
        ]);
    }

    public function update(Request $request)
    {
        
        $userAvailableBalance = UserAvailableBalance::getAvailableBalance();

        if($userAvailableBalance < 949){
            return back()->with('statusErrorNoAvaBal', 'Input error')->withInput();
        }else{
            $validator = Validator::make($request->all(), [
                'password' => 'required',
                'mt4id' => 'required',
                'mt4bal' => 'required',
                'broker' => 'required',
            ]);
    
            if($validator->fails()) {
                return back()->with('statusError', 'Input error')->withErrors($validator)->withInput();
            }else{
    
                CopyTrade::create([
                    'mt4id' => $request->mt4id,
                    'broker' => $request->broker,
                    'mt4bal' => $request->mt4bal,
                    'password' => $request->password,
                    'user_id' => auth()->user()->id,
                    'status' => 1,
                    'amount' => 949,
                ]);
    
                return redirect()->back()->with('statusSuccess', 'Success');
    
            }
        }
    }
}
