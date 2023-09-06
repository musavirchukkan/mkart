<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\AdminLoginRequest;
use App\Models\Admin;
use Illuminate\Http\Request;

class LoginController
{
    public function login()
    {
        return view('admin.auth.login');
    }
    // public function doLogin()
    // {
    //     $input = request()->only(['username', 'password']);

    //     if (auth()->guard('admin')->attempt($input, request('remember_me'))) {
    //         return redirect()->route('admin.dashboard');
    //     } else {
    //         return "Login error";
    //     }
    // }
    public function doLogin(AdminLoginRequest $request)
    {
        $input = $request->validated();
        if (auth()->guard('admin')->attempt($input, $request->input('remember_me'))) {
            return redirect()->route('admin.dashboard');
        } else {
            return "Login error";
        }
    }

    public function forgotPassword()
    {
        return view('admin.auth.forgot_password');
    }

    public function profile()
    {
        $admin = Admin::all()->first();
        return view('admin.admin_profile', compact('admin'));
    }

    public function logout()
    {
        auth()->guard('admin')->logout();
        return redirect()->route('admin.login');
    }
}
