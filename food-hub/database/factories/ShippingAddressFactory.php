<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ShippingAddress>
 */
class ShippingAddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'order_id' => function () {
                return \App\Models\Order::factory();
            },
            'name' => $this->faker->name,
            'email' => $this->faker->safeEmail,
            'address' => $this->faker->address,
        ];
    }
}
