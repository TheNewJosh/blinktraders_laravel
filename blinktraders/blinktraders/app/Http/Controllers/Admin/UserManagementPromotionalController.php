<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserManagementPromotionalController extends Controller
{
    public function __construct()
    {
        $this->middleware(['role:superadministrator']);
    }
    
    public function index()
    {
        $user = User::get();
        return view('admin.userManagementPromotional', [
            'user' => $user,
        ]);
    }
}
