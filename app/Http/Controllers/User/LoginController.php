<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserLoginRequest;
use App\Http\Requests\UserSignUpRequest;
use App\Models\User;
use Illuminate\Http\Request;

class LoginController
{
    public function login()
    {
        return view('users.auth.signin');
    }
    public function doLogin(UserLoginRequest $request)
    {
        $input = $request->validated();
        if (auth()->attempt($input, $request->input('remember_me'))) {
            return redirect()->route('homepage');
        } else {
            return redirect()->route('login')->with('message', 'Login is Invalid');
        }
    }
    public function signup()
    {
        return view('users.auth.signup');
    }
    public function doSignup(UserSignUpRequest $request)
    {
        $input = $request->validated();
        $user = User::create([
            'f_name' => $input['fname'],
            'l_name' => $input['lname'],
            'email' => $input['email'],
            'phone' => $input['phone'],
            'password' => bcrypt($input['password']),

        ]);
        auth()->login($user, 1);

        return redirect()->route('homepage');
    }

    public function forgotPassword()
    {
        return view('users.auth.forget');
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('homepage');
    }
}
