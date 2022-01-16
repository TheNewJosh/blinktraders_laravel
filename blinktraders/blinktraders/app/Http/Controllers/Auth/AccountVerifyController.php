<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AccountVerifyController extends Controller
{
    public function index()
    {
        return view('auth.accountVerify');
    }

    public function store(Request $request)
    {
        $user_id = User::find($request->user_id);
        if($request->verify_code != $user_id->activation_code){
            return back()->with('statusError', 'Input error')->withInput();
        }

        $user = User::where('id', $request->user_id)->update([
            'email_verify' => 1,
        ]);

        return redirect()->route('login')->with('statusVerifySuccess', 'Success');
    }
}
