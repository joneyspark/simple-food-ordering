<?php

namespace Database\Factories;

use App\Models\Sale;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sale>
 */
class SaleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */


    public function definition()
    {
        $card = fake()->numberBetween(100, 1000);
        $cash = fake()->numberBetween(100, 1000);
        $date = fake()->dateTimeBetween('now', '+10 months');
        // $date = fake()->unique()->dateTimeThisYear($max = 'now');
        // $date = fake()->monthName('December');
        return [
            'card' => $card,
            'cash' => $cash,
            'total' => $card + $cash,
            'created_at' => $date,
            'updated_at' => $date
        ];
    }
}
