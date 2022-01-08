<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserManagementPromotionalController extends Controller
{
    public function __construct()
    {
        $this->middleware(['role:superadministrator']);
    }
    
    public function index()
    {
        return view('admin.userManagementPromotional');
    }
}
