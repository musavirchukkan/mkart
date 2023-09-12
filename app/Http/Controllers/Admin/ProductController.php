<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ProductSaveRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController
{
    public function list()
    {
        $products = Product::latest()->get();;
        $categories = Category::all();
        // return $products;
        return view('admin.products.list', compact('products', 'categories'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.products.create', compact('categories'));
    }
    public function save(ProductSaveRequest $request)
    {

        $input = $request->validated();




        if ($request->hasFile('main_image')) {
            $extension = $request->image->extension();
            $filename = Str::random(6) . "_" . time() . "_product." . $extension;
            $request->image->storeAs('images/products', $filename);
            $input['main_image'] = $filename;
        }

        Product::create([
            'product_name' => $input['product_name'],
            'price' => $input['price'],
            'sale_price' => $input['sale_price'],
            'category_id' => $input['category_id'],
            'main_image' => $input['main_image'],
            'description' => $input['description'],
            'tags' => $input['tags'],
            'stock' => $input['stock'],
            'is_stock' => $input['is_stock'],
            'status' => $input['status'],

        ]);
        return ['status' => 200, 'message' => 'Product Saved successfully'];
        return redirect()->route('admin.products.list')->with('message', 'Product Saved successfully');
    }

    public function details($id)
    {
        $product = Product::find(decrypt($id));
        //
        $discount_price = ($product->sale_price / $product->price) * 100;
        $discount = round(100 - $discount_price);
        return view('admin.products.details', compact('product', 'discount'));
    }

    public function edit($id)
    {
        $product = Product::find(decrypt($id));
        $categories = Category::all();
        return view('admin.products.edit', compact('product', 'categories'));
    }

    public function update(ProductSaveRequest $request)
    {
        $input = $request->validated();
        $product = Product::find(decrypt($request->product_id));
        if ($request->hasFile('image')) {
            Storage::delete('images/products/' . $product->image);

            $extension = $request->image->extension();
            $filename = Str::random(6) . "_" . time() . "_product." . $extension;
            $request->image->storeAs('images/products', $filename);
            $input['image'] = $filename;
        }

        $product->update($input);
        return redirect()->route('admin.products.list')->with('message', 'Product Updated Successfully');
    }

    public function delete($id)
    {
        $product = Product::find(decrypt($id));
        if (!empty($product->image)) {
            Storage::delete('images/products/' . $product->image);
        }
        $product->delete();
        sleep(1);

        return redirect()->route('admin.products.list');  //->with('message', 'Product Deleted Successfully')
    }
}
