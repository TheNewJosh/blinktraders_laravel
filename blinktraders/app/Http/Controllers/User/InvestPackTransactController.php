<?php

namespace App\Http\Controllers\User;

use App\Models\InvestPlan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\InvestPackTransaction;
use Illuminate\Support\Facades\Validator;

class InvestPackTransactController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
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
        if($request->amount > $request->price){
            return back()->with('statusError2', 'Input error');
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
                'reference_id' => $reference_id,
            ]);
    
            return redirect()->back()->with('statusSuccess', 'Success');
        }
    }
}
