<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<Product>
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
            'description' => fake()->text(300),
            'sku' => strtoupper(Str::random(25)),
            'param_1' => rand(0, 100),
            'param_2' => rand(0, 100),
            'param_3' => rand(0, 100),
            'param_4' => rand(0, 100),
            'param_5' => rand(0, 100),
            'param_6' => rand(0, 100),
            'param_7' => rand(0, 100),
            'param_8' => rand(0, 100),
            'param_9' => rand(0, 100),
            'param_10' => rand(0, 100),
        ];
    }
}
