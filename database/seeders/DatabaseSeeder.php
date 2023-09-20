<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            AdminSeeder::class,
            CategorySeeder::class
        ]);

        $product = Product::factory(1000)->create()->each(function ($product) {
            ProductImage::factory(5)->create([
                'product_id' => $product->product_id,
            ]);
        });
    }
}
