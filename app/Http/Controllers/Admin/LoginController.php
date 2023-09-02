<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\AdminLoginRequest;
use App\Models\Admin;
use Illuminate\Http\Request;

class LoginController
{
    public function login()
    {
        return view('admin.login');
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
    public function logout()
    {
        auth()->guard('admin')->logout();
        return redirect()->route('admin.login');
    }
}
