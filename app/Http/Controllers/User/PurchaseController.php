<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PurchaseController
{
    public function cart()
    {
        $categories = Category::all();
        $carts = Cart::where('user_id', Auth::user()->user_id)->get();
        return view('users.purchase.cart', compact('categories', 'carts'));
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
