<?php

namespace App\Http\Controllers\User;

use App\Models\MasterClass;
use Illuminate\Http\Request;
use App\Models\SystemConfiguration;
use App\Http\Controllers\Controller;
use App\Services\InvestPlanTransact;
use App\Services\UserAvailableBalance;
use Illuminate\Support\Facades\Validator;

class MasterclassController extends Controller
{
    public function __construct()
    {
        $this->middleware(['role:user|superadministrator']);
    }
    
    public function index()
    {
        $systemConfiguration = SystemConfiguration::find(1)->first();
        return view('user.masterclass', [
            'system_configuration' => $systemConfiguration,
        ]);
    }

    public function store(Request $request)
    {
        $investPlanTransact = InvestPlanTransact::checkTransactionExistUser(auth()->user()->id);
        $userAvailableBalance = UserAvailableBalance::getAvailableBalance();

        if($investPlanTransact <= 0){
            return back()->with('statusErrorNoInvestPlan', 'Input error')->withInput();
        }
        if($userAvailableBalance < 499){
            return back()->with('statusErrorNoAvaBal', 'Input error')->withInput();
        }
        $validator = Validator::make($request->all(), [
            'user_id' => 'required',
        ]);

        if($validator->fails()) {
            return back()->with('statusError', 'Input error')->withErrors($validator)->withInput();
        }else{

            MasterClass::create([
                'user_id' => $request->user_id,
                'amount' => 499,
                'status' => 1,
            ]);

            return redirect()->back()->with('statusSuccess', 'Success');;

        }
    }
}
