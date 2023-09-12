<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController
{
    public function dashboard()
    {
        $userCount = User::all()->count();
        $orderCount = Order::all()->count();
        $productCount = Product::all()->count();
        $categoryCount = Category::all()->count();
        $orders = Order::latest()->take(5)->get();
        return view('admin.dashboard', compact('orders', 'userCount', 'orderCount', 'productCount', 'categoryCount'));
    }
}
