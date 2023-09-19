<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserAddressRequest;
use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use App\Models\UserAddress;
use App\Models\UserFavorite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $addresses = UserAddress::where('user_id',Auth::id())->get();


        return view('users.profile.address',compact('categories','addresses'));
    }
    public function addAddress()
    {
        $categories = Category::latest()->take(8)->get();
        return view('users.profile.addAddress',compact('categories'));
    }
    public function doAddAddress(Request $request)
    {
        $input = $request->all();
        $input['user_id'] = Auth::id();
        UserAddress::create($input);

        return redirect()->route('user.address')->with('success','Address Added Successfully');
    }
    public function editAddress($id)
    {
        $categories = Category::latest()->take(8)->get();
        $address = UserAddress::where('address_id',decrypt($id))->first();
        return view('users.profile.editAddress',compact('categories','address'));
    }
    public function doEditAddress(Request $request,$id)
    {
        $input = $request->all();
        $address = UserAddress::where('address_id',decrypt($id))->first();
        $address->update($input);

        return redirect()->route('user.address')->with('success','Address Updated Successfully');
    }
    public function deleteAddress($id)
    {
        $address = UserAddress::where('address_id',decrypt($id))->first();
        $address->delete();

        return redirect()->route('user.address')->with('success','Address Deleted Successfully');
    }

    public function whishlist()
    {
        $categories = Category::latest()->take(8)->get();
        $whishlist = UserFavorite::where('user_id',Auth::id())->get();
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
