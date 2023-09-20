<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'category_name' => 'Camera',
            'category_image' => 'images/categories/camera.jpg'
        ]);
        Category::create([
            'category_name' => 'Fashion',
            'category_image' => 'images/categories/fashion.jpg'
        ]);
        Category::create([
            'category_name' => 'Perfumes',
            'category_image' => 'images/categories/perfume.jpg'
        ]);
        Category::create([
            'category_name' => 'Furniture',
            'category_image' => 'images/categories/furniture.jpg'
        ]);
        Category::create([
            'category_name' => 'Footwear',
            'category_image' => 'images/categories/footware.jpg'
        ]);
        Category::create([
            'category_name' => 'T-Shirt',
            'category_image' => 'images/categories/t-shirt.jpg'
        ]);
        Category::create([
            'category_name' => 'Essentials',
            'category_image' => 'images/categories/essentials.jpg'
        ]);
        Category::create([
            'category_name' => 'Appliances',
            'category_image' => 'images/categories/applainses.jpg'
        ]);
        Category::create([
            'category_name' => 'Toys',
            'category_image' => 'images/categories/ftoys.jpg'
        ]);
        Category::create([
            'category_name' => 'Watch',
            'category_image' => 'images/categories/watch.jpg'
        ]);
        Category::create([
            'category_name' => 'Western Wear',
            'category_image' => 'images/categories/western.jpg'
        ]);
        Category::create([
            'category_name' => 'Beauty',
            'category_image' => 'images/categories/beauty.jpg'
        ]);
        Category::create([
            'category_name' => 'Bag',
            'category_image' => 'images/categories/bag.jpg'
        ]);
        Category::create([
            'category_name' => 'Sunglasses',
            'category_image' => 'images/categories/sunglass.jpg'
        ]);
        Category::create([
            'category_name' => 'Shoe',
            'category_image' => 'images/categories/shoe.jpg'
        ]);
        Category::create([
            'category_name' => 'Earphone',
            'category_image' => 'images/categories/earphone.jpg'
        ]);
        Category::create([
            'category_name' => 'Wallet',
            'category_image' => 'images/categories/wallet.jpg'
        ]);
        Category::create([
            'category_name' => 'Fancy',
            'category_image' => 'images/categories/fancy.jpg'
        ]);

    }
}
