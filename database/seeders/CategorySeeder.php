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
            'name' => 'Mobile'
        ]);
        Category::create([
            'name' => 'Fashion'
        ]);
        Category::create([
            'name' => 'Perfumes'
        ]);
        Category::create([
            'name' => 'Grocery'
        ]);
        Category::create([
            'name' => 'Electonics'
        ]);
    }
}
