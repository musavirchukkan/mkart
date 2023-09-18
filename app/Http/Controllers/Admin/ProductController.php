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
        $products = Product::latest()->get();
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

        // Process the main image
        $mainImage = $request->file('main_image');
        $mainImagePath = null;

        if ($mainImage) {
            $mainImageExtension = $mainImage->getClientOriginalExtension();
            $mainImageFileName = 'main_image_' . Str::random(6) . "_" . time() . "_product." . $mainImageExtension;
            $mainImagePath = $mainImage->storeAs('images/products', $mainImageFileName);
        }

        // Create a new Product instance with the validated data
        $product = new Product($input);
        $product->main_image = $mainImagePath;
        // return $mainImageFileName;
        // Save the product to the database
        $product->save();

        // Process and save additional images
        // $additionalImages = $request->file('image');

        // if ($additionalImages && is_array($additionalImages)) {
        //     foreach ($additionalImages as $image) {
        //         $extension = $image->getClientOriginalExtension();
        //         $filename = 'additional_image_' . Str::random(6) . "_" . time() . "_product." . $extension;
        //         $image->storeAs('images/products', $filename);


        //         $product->images()->create(['image_path' => $filename]);
        //     }
        // }

        // Redirect or return a response as needed
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
        if ($request->hasFile('main_image')) {
            Storage::delete('images/products/' . $product->main_image);

            $extension = $request->main_image->extension();
            $filename = 'main_image_' . Str::random(6) . "_" . time() . "_product." . $extension;
            $filepath = $request->main_image->storeAs('images/products', $filename);
            $input['main_image'] = $filepath;
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
