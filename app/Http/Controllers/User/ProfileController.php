<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserAddressRequest;
use App\Http\Requests\UserDetailsUpdateRequest;
use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use App\Models\UserAddress;
use App\Models\UserFavorite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


class ProfileController extends Controller
{
    public function profile()
    {
        $categories = Category::latest()->take(8)->get();
        $profile = User::find(Auth::id());
        return view('users.profile.userDetails', compact('categories', 'profile'));
    }
    public function editProfile()
    {
        $categories = Category::latest()->take(8)->get();
        $profile = User::find(Auth::id());
        return view('users.profile.editProfile', compact('categories', 'profile'));
    }
    public function doEditProfile(Request $request)
    {
        $input = $request->all();
        $user = User::find(Auth::id());
        $Image = $request->file('image');
        $ImagePath = $user->image;

        if ($Image) {
            Storage::delete($user->image);
            $ImageExtension = $Image->getClientOriginalExtension();
            $ImageFileName = 'image_' . Str::random(6) . "_" . time() . "_user." . $ImageExtension;
            $ImagePath = $Image->storeAs('images/users', $ImageFileName);
        }
        $user->fill($input);
        $user->image = $ImagePath;

        $user->save();


        return redirect()->route('user.profile')->with('success', 'Profile Updated Successfully');
    }

    public function address()
    {
        $categories = Category::latest()->take(8)->get();
        $addresses = UserAddress::where('user_id', Auth::id())->get();


        return view('users.profile.address', compact('categories', 'addresses'));
    }
    public function addAddress()
    {
        $categories = Category::latest()->take(8)->get();
        return view('users.profile.addAddress', compact('categories'));
    }
    public function doAddAddress(Request $request)
    {
        $input = $request->all();
        $input['user_id'] = Auth::id();
        UserAddress::create($input);

        return redirect()->route('user.address')->with('success', 'Address Added Successfully');
    }
    public function editAddress($id)
    {
        $categories = Category::latest()->take(8)->get();
        $address = UserAddress::where('address_id', decrypt($id))->first();
        return view('users.profile.editAddress', compact('categories', 'address'));
    }
    public function doEditAddress(Request $request, $id)
    {
        $input = $request->all();
        $address = UserAddress::where('address_id', decrypt($id))->first();
        $address->update($input);

        return redirect()->route('user.address')->with('success', 'Address Updated Successfully');
    }
    public function deleteAddress($id)
    {
        $address = UserAddress::where('address_id', decrypt($id))->first();
        $address->delete();

        return redirect()->route('user.address')->with('success', 'Address Deleted Successfully');
    }

    public function whishlist()
    {
        $categories = Category::latest()->take(8)->get();
        $wishlists = UserFavorite::where('user_id', Auth::id())->get();
        return view('users.profile.whishlist', compact('categories', 'wishlists'));
    }
    public function deleteWhishlist($id)
    {
        $wishlist = UserFavorite::find(decrypt($id));

        $wishlist->delete();

        return redirect()->route('user.whishlist')->with('success', 'Product Deleted Successfully');
    }

    public function orders()
    {
        $categories = Category::latest()->take(8)->get();
        $orders = Order::where('user_id', Auth::id())->latest()->paginate(15);
        return view('users.profile.orders', compact('categories', 'orders'));
    }

    public function orderDetails($id)
    {
        $categories = Category::latest()->take(8)->get();
        $order = Order::find(decrypt($id));
        // return $order->orderLines[0]->product->product_name;
        return view('users.profile.orderdetails', compact('categories', 'order'));
    }

    public function settings()
    {
        $categories = Category::latest()->take(8)->get();
        $user = User::where('user_id', auth()->user()->id)->first();
        return view('users.profile.settings', compact('categories', 'user'));
    }
}
