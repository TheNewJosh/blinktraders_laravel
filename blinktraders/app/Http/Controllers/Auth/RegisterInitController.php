<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegisterInitController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware(['guest']);
    // }
    
    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'phone' => 'required|min:11|numeric|unique:users',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'phone' => $request->phone,
            'referral_user' => $request->referral_user,
        ]);
        $user->attachRole('user');
        return redirect()->route('registerSubmit', ['user' => $user->id]);
    }

}