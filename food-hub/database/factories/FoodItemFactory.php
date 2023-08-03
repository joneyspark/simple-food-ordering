<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\FoodItem>
 */
class FoodItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            // 'categories_id' => $category->id,
            
            'name' => fake()->name(),
            'ingredients' => fake()->paragraph(),
            'photo' => fake()->imageUrl($width = 640, $height = 480),
            'price' => fake()->randomFloat($nbMaxDecimals = 2, $min = 1, $max = 50),
            'rating' => fake()->randomFloat($nbMaxDecimals = 2, $min = 4, $max = 5),
        ];
    }
}
