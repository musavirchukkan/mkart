<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'price' => fake()->randomFloat(3),
            'category_id' => fake()->numberBetween(1, 5),
            'image' => fake()->imageUrl($width = 400, $height = 400),
            'description' => fake()->realText($maxNbChars = 200, $indexSize = 2),
            'stock' => fake()->numberBetween($min = 50, $max = 900),
            'status' => fake()->numberBetween(0, 1),
        ];
    }
}
