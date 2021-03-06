<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LogoutController extends Controller
{
    public function store($user_id)
    {
        User::where('id', $user_id)->update([
            'last_login' => date('Y-m-d h:i:s', time()),
        ]);

        auth()->logout();

        return redirect()->route('index');
    }
}
