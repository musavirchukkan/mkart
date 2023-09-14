<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends ModelFactory<\App\Models\ProductImage>
 */
class ProductImageFactory extends Factory
{

    public function definition(): array
    {
        return [
            'image' => fake()->imageUrl($width = 400, $height = 400),
        ];
    }
}
