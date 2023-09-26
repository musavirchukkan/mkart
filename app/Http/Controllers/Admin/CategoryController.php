<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategorySaveRequest;
use App\Models\Category;
use GuzzleHttp\Psr7\Message;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CategoryController
{
    public function categories()
    {
        $categories = Category::all();

        return view('admin.products.categories', compact('categories'));
    }


    public function save(Request $request)
    {
        $request->validate([
            'category_name' => 'required|unique:categories,category_name',
            'category_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Add validation rules for the image
        ]);

        if ($request->hasFile('category_image')) { // Check if an image was uploaded
            $category_image = $request->file('category_image'); // Get the uploaded file
            $extension = $category_image->getClientOriginalExtension();
            $filename = Str::random(6) . "_" . time() . "_category." . $extension;
            $filepath = $category_image->storeAs('images/categories', $filename);
        } else {
            $filepath = null; // Handle the case where no image was uploaded
        }

        Category::create([
            'category_name' => $request->category_name,
            'image' => $filepath, // Save the file path to the 'image' column
        ]);

        return ['status' => 200, 'message' => 'Category Created Successfully'];
        // Alternatively, you can return a redirect response here
    }




    // public function save(Request $request)
    // {
    //     $request->validate([
    //         'category_name' => 'required|unique:categories,category_name'
    //     ]);

    //     if ($request->input('category_image')) {
    //         $extension = $request->image->extension();
    //         $filename = Str::random(6) . "_" . time() . "_category." . $extension;
    //         $filepath = $request->image->storeAs('images/categories', $filename);
    //         $request['category_image'] = $filepath;
    //     }
    //     return $request->category_image;
    //     Category::create([
    //         'category_name' => $request->category_name,
    //         'image' => $request->category_image,

    //     ]);
    //     // return ['status' => 200, 'message' => 'Category Created Successfully'];

    //     // return redirect()->route('admin.categories.list')->with('message', 'Category Saved successfully');
    // }



    public function edit($id)
    {
        $category = Category::find(decrypt($id));

        return view('admin.products.edit', compact('category'));
    }

    public function update(CategorySaveRequest $request)
    {
        $input = $request->validated();
        $product = Category::find(decrypt($request->product_id));
        if ($request->hasFile('image')) {
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
        $category = Category::find(decrypt($id));
        if (!empty($category->image)) {
            Storage::delete('images/category/' . $category->image);
        }
        $category->delete();
        sleep(1);

        return redirect()->route('admin.categories.list');  //->with('message', 'Product Deleted Successfully')
    }


    public function fetchCategories()
    {
        $categories = Category::all();
        return ['status' => 200, 'data' => $categories];
    }
}
