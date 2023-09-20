<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Order;
use App\Models\OrderLine;
use App\Models\Product;
use App\Models\UserAddress;
use App\Models\UserFavorite;
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
    public function removeFromCart($id)
    {
        Cart::find(decrypt($id))->delete();
        return redirect()->back();
    }

    public function shop()
    {
        $categories = Category::all();
        $products = Product::latest()->paginate(20);
        return view('users.purchase.shop', compact('categories', 'products'));
    }
    public function checkout()
    {
        $categories = Category::all();
        $carts = Cart::where('user_id', Auth::id())->get();
        $user = Auth::user();
        return view('users.purchase.checkout', compact('categories', 'carts', 'user'));
    }

    public function orderProcess(Request $request)
    {
        $input = $request->all();

        // if ($input['address_id'] == null) {
        //     $newAddress = [
        //         'user_id' => Auth::id(),
        //         'fname' => $input['fname'],
        //         'lname' => $input['lname'],
        //         'house_name' => $input['house_name'],
        //         'street' => $input['street'],
        //         'city' => $input['city'],
        //         'state' => $input['state'],
        //         'country' => $input['country'],
        //         'pincode' => $input['pincode'],
        //         'phone' => $input['phone'],
        //         'email' => $input['email'],
        //     ];
        //     $address = UserAddress::create($newAddress);
        //     $input['address_id'] = $address->address_id;
        // }


        if (Cart::where('user_id', Auth::id())->count() == 0) {
            return redirect(route('product.cart'))->with('message', 'Cart is Empty');
        } else {
            $orderDetails = [
                'order_number' => 'ORD-' . strtoupper(uniqid()),
                'user_id' => Auth::id(),
                'billing_name' => $input['b_fname'] . ' ' . $input['b_lname'],
                'billing_email' => $input['b_email'],
                'billing_phone' => $input['b_phone'],
                'address_id' => $input['Adress_id'],
                'price' => $input['total'],
                'payment_status' => 'not paid',
                'mode_of_payment' => $input['modeOfPayment'],
                'status' => 'placed',
            ];
            $order = Order::create($orderDetails);

            $products = Cart::where('user_id', Auth::id())->get();

            foreach ($products as $product) {
                $orderLine = [
                    'order_id' => $order->order_id,
                    'product_id' => $product->product_id,
                    'quantity' => $product->quantity,
                    'price' => $product->price,
                ];
                OrderLine::create($orderLine);
            }
        }


        // return $input;



        Cart::where('user_id', Auth::id())->delete();
        $categories = Category::all();
        return redirect(route('user.orders'));
    }

    public function contact()
    {
        $categories = Category::all();
        return view('users.purchase.contact', compact('categories'));
    }
    public function details($id)
    {
        $categories = Category::all();
        $product = Product::find(decrypt($id));
        $youMayAlsoLike = Product::where('category_id', $product->category_id)->take(5)->get();


        return view('users.purchase.details', compact('categories', 'product', 'youMayAlsoLike'));
    }
    public function category($id)
    {
        $categories = Category::all();
        $products = Product::where('category_id', decrypt($id))->latest()->paginate(20);
        return view('users.purchase.shop', compact('categories', 'products'));
    }
    public function categoryList()
    {
        $categories = Category::all();

        return view('users.purchase.category', compact('categories'));
    }
    public function doWhishlist($id)
    {
        $product = Product::find(decrypt($id));

        UserFavorite::create([
            'user_id' => Auth::id(),
            'product_id' => $product->product_id,
        ]);


        return redirect()->back();
    }
}
