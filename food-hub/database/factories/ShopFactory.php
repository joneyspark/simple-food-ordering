<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Shop>
 */
class ShopFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->company(),
            'phone' => fake()->randomNumber(5, false),
            'post_code' => fake()->randomNumber(5, false),
            'location' => fake()->address,
            'employee' => fake()->unique()->randomDigit,
        ];
    }
}
