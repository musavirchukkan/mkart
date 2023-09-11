<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController
{
    public function orders()
    {

        $orders = Order::all();

        return view('admin.orders',compact('orders'));
    }
}
