<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Product;
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
    public function addToCart($id)
    {
        $product = Product::find(decrypt($id));
        Cart::create([
            'user_id' => Auth::id(),
            'product_id' => $product->product_id,
            'price' => $product->sale_price,

            'quantity' => 1,

        ]);
        return redirect()->back();
    }

    public function shop()
    {
        $categories = Category::all();
        $products = Product::latest()->paginate(12);
        return view('users.purchase.shop', compact('categories', 'products'));
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
    public function category($id)
    {
        $categories = Category::all();
        $products = Category::find(decrypt($id))->products;
        return $products;
        return view('users.purchase.shop', compact('categories', 'products'));
    }
    public function categoryList()
    {
        $categories = Category::all();
        return view('users.purchase.category', compact('categories'));
    }
}
