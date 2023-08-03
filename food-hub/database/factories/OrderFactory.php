<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Carbon\Carbon;

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
    public function definition()
    {

        $now = Carbon::now();
        $pastSevenMonths = $now->copy()->subMonths(7);
        $user = User::inRandomOrder()->first();
        return [
            'user_id' => $user->id,
            'status' => $this->faker->randomElement(['pending', 'processing', 'shipped']),
            'payment' => $this->faker->numberBetween(0, 1),
            'created_at' => $this->faker->dateTimeBetween($pastSevenMonths, $now),
            'updated_at' => $this->faker->dateTimeBetween($pastSevenMonths, $now),
        ];
    }
}
