<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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
            'category_name' => 'required|unique:categories,category_name'
        ]);

        if ($request->hasFile('category_image')) {
            $extension = $request->image->extension();
            $filename = Str::random(6) . "_" . time() . "_category." . $extension;
            $request->image->storeAs('images/categories', $filename);
            $request['category_image'] = $filename;
        }

        Category::create([
            'category_name' => $request->category_name,
            'image' => $request->category_image,

        ]);
        return ['status' => 200, 'message' => 'Category Created Successfully'];

        // return redirect()->route('admin.categories.list')->with('message', 'Category Saved successfully');
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
