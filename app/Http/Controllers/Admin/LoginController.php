<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Http\Request;

class LoginController
{
    public function login()
    {
        return view('admin.login');
    }
    public function doLogin()
    {
        return view();
    }
}
