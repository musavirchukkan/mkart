<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class PurchaseController
{
    public function cart()
    {
        $categories = Category::all();
        return view('users.cart', compact('categories'));
    }

    public function shop()
    {
        $categories = Category::all();
        return view('users.shop', compact('categories'));
    }
}
