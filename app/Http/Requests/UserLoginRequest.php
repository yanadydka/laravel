<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserLoginRequest extends FormRequest
{
    public function rules()
    {
        return [
           'login' => ['required', 'string', 'max:60'],
            'password' => ['required', 'string', 'max:60'],
        ];
    }
}
