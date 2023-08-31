<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use Illuminate\Http\Request;

class LoginController
{
    public function login()
    {
        return view('admin.login');
    }
    public function doLogin()
    {
        $input = request()->only(['username', 'password']);
        if (auth()->guard('admin')->attempt($input)) {
            return redirect()->route('admin.dashboard');
        } else {
            return "Login error";
        }
    }
}
