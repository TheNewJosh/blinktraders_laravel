<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Mail\AccountVerification;
use App\Models\SystemConfiguration;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;

class RegisterSubmitController extends Controller
{
    public function index(User $user)
    {
        return view('auth.registerSubmit', [
            'user' => $user,
        ]);
    }

    public function update(Request $request)
    {
        $systemConfiguration = SystemConfiguration::find(1)->first();
        
        $this->validate($request, [
            'username' => 'required|unique:users',
            'country' => 'required',
            'password' => 'required|confirmed',
        ]);

        $reference_id = $request->user_id."#".uniqid()."cmf";

        $user = User::where('id', $request->user_id)->update([
            'username' => $request->username,
            'country' => $request->country,
            'activation_code' => $reference_id,
            'signup_fee' => $systemConfiguration->signup_fee,
            'password' => Hash::make($request->password),
        ]);

        $user_id = User::find($request->user_id);
        Mail::to($request->email)->send(new AccountVerification($user_id));
        
        return redirect()->route('login')->with('statusLoginSuccess', 'Success');
    }
}
