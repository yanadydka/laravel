<?php

namespace App\Http\Controllers;


use App\Http\Requests\UserLoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function login()
    {
        return view('user.login');
    }

    public function register()
    {
        return view('user.register');
    }

    public function auth(UserLoginRequest $request)
    {
        if ($user = User::where('login', $request->login)->first()) {
            // Hash::check($request->password, $user->password)
            Auth::login($user);

            return redirect()->route('client.index');
        }
        return back()->withErrors("Неверный логин или пароль");
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('main');
    }
}
