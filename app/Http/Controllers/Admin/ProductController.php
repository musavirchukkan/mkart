<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ProductSaveRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController
{
    public function list()
    {
        $products = Product::latest()->paginate(15);
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
        Product::create($input);
        return redirect()->route('admin.products.list')->with('message', 'Product Saved successfully');
    }
}
