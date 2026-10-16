<?php

namespace Database\Factories;

use App\Models\Basket;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Basket>
 */
class BasketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'time' => fake()->dateTime(),
            'product_id' => Product::query()->inRandomOrder()->value('id') ?? Product::factory(),
            'user_id' => User::query()->inRandomOrder()->value('id') ?? User::factory(),
        ];
    }
}
