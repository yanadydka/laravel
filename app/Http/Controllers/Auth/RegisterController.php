<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(RegisterRequest $request)
    {
        $data = $request->except('_token', 'password_confirmation');

        $user = User::create(array_merge(
            $data,
            ['password' => Hash::make($request->password)],
            ['role' => 0] // 0 - обычный пользователь
        ));

        auth()->login($user);

        return redirect()->route('home');
    }
}