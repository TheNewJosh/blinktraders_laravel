<?php

namespace App\Http\Controllers\Admin;

use App\Models\CopyTrade;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CopyTradeController extends Controller
{
    public function __construct()
    {
        $this->middleware(['role:superadministrator']);
    }
    
    public function index()
    {
        $copyTrade = CopyTrade::get();
        return view('admin.copyTrade', [
            'copyTrade' => $copyTrade,
        ]);
    }
}
