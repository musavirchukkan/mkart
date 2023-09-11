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
            'category_name' => 'Mobile'
        ]);
        Category::create([
            'category_name' => 'Fashion'
        ]);
        Category::create([
            'category_name' => 'Perfumes'
        ]);
        Category::create([
            'category_name' => 'Grocery'
        ]);
        Category::create([
            'category_name' => 'Electronics'
        ]);
    }
}
