<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "total_amount" => fake()->randomFloat(2, 0, 5000),
            "discount" => fake()->randomFloat(2, 0, 1000),
            "is_void" => fake()->boolean(20),
            "is_cancelled" => fake()->boolean(10)
        ];
    }
}
