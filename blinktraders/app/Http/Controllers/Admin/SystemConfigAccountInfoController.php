<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class SystemConfigAccountInfoController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }
    
    public function index(User $user)
    {        
        return view('admin.systemConfigAccountInfo', [
            'user' => $user,
        ]);
    }

    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required|unique:users,username,'.$request->id
        ]);

        if($validator->fails()) {
            return back()->with('statusError', 'Input error')->withErrors($validator)->withInput();
        }else{

            User::where('id', $request->id)->update([
                'username' => $request->username,
            ]);

            if($request->password){
                User::where('id', $request->id)->update([
                    'password' => Hash::make($request->password),
                ]);
            }

            return redirect()->back()->with('statusSuccess', 'Success');;

        }
    }
}
