<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\SystemConfiguration;
use App\Http\Controllers\Controller;
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

        $user = User::where('id', $request->user_id)->update([
            'username' => $request->username,
            'country' => $request->country,
            'signup_fee' => $systemConfiguration->signup_fee,
            'password' => Hash::make($request->password),
        ]);
        
        return redirect()->route('login')->with('statusLoginSuccess', 'Success');
    }
}
