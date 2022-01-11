<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserManagementClientAccountController extends Controller
{
    public function __construct()
    {
        $this->middleware(['role:superadministrator']);
    }
    
    public function index()
    {
        $user = User::get();

        return view('admin.userManagementClientAccount', [
            'user' => $user,
        ]);
    }

    public function store(Request $request)
    {
        $user = User::where('id', $request->user_id)->update([
            'status' => $request->status,
        ]);

        return redirect()->back()->with('statusSuccess', 'Success');;
    }
}
