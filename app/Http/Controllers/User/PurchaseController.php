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
        return view('users.purchase.cart', compact('categories'));
    }

    public function shop()
    {
        $categories = Category::all();
        return view('users.purchase.shop', compact('categories'));
    }
    public function checkout()
    {
        $categories = Category::all();
        return view('users.purchase.checkout', compact('categories'));
    }
    public function contact()
    {
        $categories = Category::all();
        return view('users.purchase.contact', compact('categories'));
    }
    public function details()
    {
        $categories = Category::all();
        return view('users.purchase.details', compact('categories'));
    }
}
