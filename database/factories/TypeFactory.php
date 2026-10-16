<?php

namespace Database\Factories;

use App\Models\type;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<type>
 */
class TypeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->sentence(2),
            'description' => fake()->sentence(3)
        ];
    }
}