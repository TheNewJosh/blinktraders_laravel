<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\PinCreateVerification;
use App\Mail\PasswordResetNotification;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;

class SecurityController extends Controller
{
    public function __construct()
    {
        $this->middleware(['role:user|superadministrator']);
    }
    
    public function index()
    {
        return view('user.security');
    }

    public function storePin(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'pin' => 'required|confirmed',
        ]);

        if($validator->fails()) {
            return back()->with('statusError', 'Input error')->withErrors($validator)->withInput();
        }else{

            User::where('id', auth()->user()->id)->update([
                'pin' => $request->pin,
            ]);
            
            Mail::to(auth()->user())->send(new PinCreateVerification(auth()->user()));

            return redirect()->back()->with('statusSuccess', 'Success');;

        }
    }

    public function storePassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'password' => 'required|confirmed',
        ]);

        if($validator->fails()) {
            return back()->with('statusError', 'Input error')->withErrors($validator)->withInput();
        }else{

            User::where('id', auth()->user()->id)->update([
                'password' => Hash::make($request->password),
            ]);
            
            Mail::to(auth()->user())->send(new PasswordResetNotification(auth()->user()));

            return redirect()->back()->with('statusSuccess', 'Success');;

        }
    }
}
