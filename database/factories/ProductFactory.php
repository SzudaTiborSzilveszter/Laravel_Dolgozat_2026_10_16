<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Type;
use Illuminate\Database\Eloquent\Factories\Factory;

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
            'type_id' => Type::factory(),
            'name' => fake()->name(),
            'description' => fake()->sentence(3),
            'price' => fake()->numberBetween(1,1000)
        ];
    }
}
