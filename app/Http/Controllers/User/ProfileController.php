<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use App\Models\UserAddress;
use App\Models\UserFavorite;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile()
    {
        $categories = Category::latest()->take(8)->get() ;
        $profile = User::where('user_id',auth()->user()->id)->first();


        return view('users.profile.userDetails',compact('categories','profile'));
    }

    public function address()
    {
        $categories = Category::latest()->take(8)->get();
        $address = UserAddress::where('user_id',auth()->user()->id)->first();


        return view('users.profile.address',compact('categories','address'));
    }

    public function whishlist()
    {
        $categories = Category::latest()->take(8)->get();
        $whishlist = UserFavorite::where('user_id',auth()->user()->id)->first();
        return view('users.profile.whishlist',compact('categories','whishlist'));
    }

    public function orders()
    {
        $categories = Category::latest()->take(8)->get();
        $orders = Order::where('user_id',auth()->user()->id)->first();
        return view('users.profile.orders',compact('categories','orders'));
    }

    public function settings()
    {
        $categories = Category::latest()->take(8)->get();
        $user = User::where('user_id',auth()->user()->id)->first();
        return view('users.profile.settings',compact('categories','user'));
    }

}
