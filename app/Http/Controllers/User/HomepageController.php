<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomepageController
{
    public function home()
    {
        $categories = Category::all();
        $products = Product::latest()->paginate(28);
        return view('users.home', compact('products', 'categories'));
    }
}
