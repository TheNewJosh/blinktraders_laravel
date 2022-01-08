<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class UserManagementClientAccountManageController extends Controller
{
    public function __construct()
    {
        $this->middleware(['role:superadministrator']);
    }
    
    public function index(User $user)
    {        
        return view('admin.userManagementClientAccountManage', [
            'user' => $user,
        ]);
    }

    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required|unique:users,username,'.$request->user_id,
            'name' => 'required',
            'email' => 'required|email|max:255|unique:users,email,'.$request->user_id,
            'phone' => 'required|numeric|unique:users,phone,'.$request->user_id,
        ]);

        if($validator->fails()) {
            return back()->with('statusError', 'Input error')->withErrors($validator)->withInput();
        }else{

            $user = User::where('id', $request->user_id)->update([
                'username' => $request->username,
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'address' => $request->address,
                'country' => $request->country,
                'zip_code' => $request->zip_code,
                'email_verify' => $request->email_verify,
                'phone_verify' => $request->phone_verify,
                'upgrade_account' => $request->upgrade_account,
            ]);

            return redirect()->back()->with('statusSuccess', 'Success');;

        }
    }
}
