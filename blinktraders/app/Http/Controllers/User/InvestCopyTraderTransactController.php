<?php

namespace App\Http\Controllers\User;

use App\Models\CopyTrade;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class InvestCopyTraderTransactController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
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
            ]);

            return redirect()->back()->with('statusSuccess', 'Success');;

        }
    }
}
