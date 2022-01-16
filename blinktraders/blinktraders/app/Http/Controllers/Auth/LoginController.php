<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Mail\SuspiciousLogin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected function authenticated(Request $request, $user)
    {
        if(User::where('id', $user->id)->get()->first()->mac_address != $request->ip()){
            Mail::to(auth()->user())->send(new SuspiciousLogin(auth()->user()->username, $request->ip()));
        }
        User::where('id', $user->id)->update([
            'mac_address' => $request->ip(),
        ]);
        
        if($user->hasRole('superadministrator')){
            return redirect('/dashboardAdmin');
        }
        
        if($user->hasRole('user')){
            return redirect('/dashboard');
        }
        
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    
}
