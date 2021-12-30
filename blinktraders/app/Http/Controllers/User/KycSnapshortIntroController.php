<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KycSnapshortIntroController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }
    
    public function index()
    {
        return view('user.kycSnapshortIntro');
    }
}