<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class SecurityController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
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

            return redirect()->back()->with('statusSuccess', 'Success');;

        }
    }
}
