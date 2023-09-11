<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class CustomerController
{
    public function customers()
    {
        $users = User::all();

        return view('admin.customers',compact('users'));
    }
}
