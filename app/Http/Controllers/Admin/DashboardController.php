<?php

namespace App\Http\Controllers\Admin;

use App\Models\Order;
use Illuminate\Http\Request;

class DashboardController
{
    public function dashboard()
    {
        $orders = Order::latest()->take(5)->get();
        return view('admin.dashboard',compact('orders'));
    }
}
