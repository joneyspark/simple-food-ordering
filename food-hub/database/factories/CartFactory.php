<?php

namespace Database\Factories;

use App\Models\FoodItem;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cart>
 */
class CartFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $shippingCost = 5;
        $foodItem = FoodItem::inRandomOrder()->first();
        $qty = $this->faker->numberBetween(1, 5);
        $price = $this->faker->randomFloat(2, 10, 100);
        $total = $price * $qty;
        $taxRate = $total * 0.1;
        $totalPrice = $total + $taxRate + $shippingCost;

        return [

            'item_id' => $foodItem->id,
            'qty' => $qty,
            'price' => $price,
            'total' => $totalPrice
        ];
    }
}
