<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\FoodItem;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Database\Seeders\ItemSeeder;
use Database\Seeders\BrandSeeder;
use Database\Seeders\DeviceSeeder;
use Database\Seeders\CategorySeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // \App\Models\User::factory(10)->create();


        \App\Models\User::factory()->create([
            'name' => 'Arifur Rahman',
            'email' => 'arifur@email.com',
            'type' => 'admin',
            'phone' => '070123456789',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);

        \App\Models\User::factory(5)->create();


        \App\Models\Category::factory()->count(6)->create()->each(function ($category) {
            //create 5 posts for each user
            \App\Models\FoodItem::factory()->count(4)->create(['categories_id' => $category->id]);
        });

        \App\Models\Order::factory()->count(50)->create()->each(function ($order) {

            \App\Models\Cart::factory()->count(2)->create(['order_id' => $order->id]);

            \App\Models\ShippingAddress::factory()->count(1)->create(['order_id' => $order->id]);

            \App\Models\Payment::factory()->count(1)->create(['order_id' => $order->id]);
        });
    }
}
