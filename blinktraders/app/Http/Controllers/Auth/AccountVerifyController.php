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
        $user = User::where('id', $request->user_id)->update([
            'email_verify' => $request->email_verify,
        ]);
        
        return redirect()->route('dashboard')->with('statusVerifySuccess', 'Success');
    }
}
