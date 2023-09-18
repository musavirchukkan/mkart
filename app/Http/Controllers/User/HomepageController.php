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
        $products = Product::latest()->paginate(8);
        $features = Product::where('is_featured', 1)->latest('created_at')->take(8)->get();

        return view('users.home', compact('categories', 'products', 'features'));
    }
}
