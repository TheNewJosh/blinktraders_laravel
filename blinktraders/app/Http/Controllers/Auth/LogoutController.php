<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LogoutController extends Controller
{
    public function store()
    {
        User::where('id', auth()->user()->id)->update([
            'last_login' => date('Y-m-d h:i:s', time()),
        ]);

        auth()->logout();

        return redirect()->route('index');
    }
}
