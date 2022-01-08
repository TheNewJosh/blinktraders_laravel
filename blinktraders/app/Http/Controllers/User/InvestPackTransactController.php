<?php

namespace App\Http\Controllers\User;

use App\Models\Referrals;
use App\Models\InvestPlan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\InvestPlanTransact;
use App\Models\InvestPackTransaction;
use App\Services\UserAvailableBalance;
use Illuminate\Support\Facades\Validator;

class InvestPackTransactController extends Controller
{
    public function __construct()
    {
        $this->middleware(['role:user|superadministrator']);
    }
    
    public function index()
    {
        $investPlan = InvestPlan::where('status', 1)->get();

        return view('user.investPackTransact', [
            'investPlan' => $investPlan,
        ]);
    }

    public function store(Request $request)
    {
        $userAvailableBalance = UserAvailableBalance::getAvailableBalance();
        
        if($userAvailableBalance < $request->amount){
            return back()->with('statusErrorNoAvaBal', 'Input error')->withInput();
        }

        if($request->amount > $request->max_amount ){
            return back()->with('statusErrorMaxAmt', 'Input error')->withInput();
        }

        if($request->amount < $request->min_amount ){
            return back()->with('statusErrorMinAmt', 'Input error')->withInput();
        }

        $validator = Validator::make($request->all(), [
            'amount' => 'required',
        ]);

        if($validator->fails()) {
            return back()->with('statusdepositError', 'Input error')->withErrors($validator)->withInput();
        }else{
            $reference_id = $request->user_id."#".uniqid()."inp";

            InvestPackTransaction::create([
                'amount' => $request->amount,
                'user_id' => $request->user_id,
                'invest_plan_id' => $request->invest_plan_id,
                'percentage' => $request->percentage,
                'duration' => $request->duration,
                'profit' => $request->profit,
                'total' => $request->total,
                'reference_id' => $reference_id,
                'status' => 1,
            ]);

            if($request->user_ref){
                $amount = ($request->percent_referral/100) * $request->amount;

                Referrals::create([
                    'user_id' => $request->user_ref,
                    'user_id_ref' => $request->user_id,
                    'amount' => $amount,
                ]);
            }
    
            return redirect()->back()->with('statusSuccess', 'Success');
        }
    }
}
