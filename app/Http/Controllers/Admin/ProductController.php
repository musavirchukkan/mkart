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
        $products = Product::all();
        // return $products;
        return view('admin.products.list', compact('products'));
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

        Product::create($input);
        return redirect()->route('admin.products.list')->with('message', 'Product Saved successfully');
    }

    public function details($id)
    {
        $product = Product::find(decrypt($id));
        return view('admin.products.details', compact('product'));
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
        return redirect()->route('admin.products.list')->with('message', 'Product Deleted Successfully');
    }

    public function categories()
    {
        $categories = Category::all();

        return view('admin.products.categories', compact('categories'));
    }
}
