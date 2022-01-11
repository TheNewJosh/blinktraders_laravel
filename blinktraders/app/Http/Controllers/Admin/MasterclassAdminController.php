<?php

namespace App\Http\Controllers\Admin;

use App\Models\MasterClass;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MasterclassAdminController extends Controller
{
    public function __construct()
    {
        $this->middleware(['role:superadministrator']);
    }
    
    public function index()
    {
        $masterClass = MasterClass::get();
        return view('admin.masterclass', [
            'masterClass' => $masterClass,
        ]);
    }
}
