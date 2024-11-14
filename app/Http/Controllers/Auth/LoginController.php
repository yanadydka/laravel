<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected function authenticated($request, $user)
    {
        if ($user->role == 1) {
            return redirect()->route('admin.index');
        }

        return redirect()->route('home');
    }
}