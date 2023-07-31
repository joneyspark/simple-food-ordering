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
            'name' => 'Joney Spark',
            'email' => 'joney@email.com',
            'type' => 'admin',
            'phone' => '07888673770',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);

        \App\Models\User::factory(5)->create();


        \App\Models\Category::factory()->count(6)->create()->each(function ($category) {
            //create 5 posts for each user
            \App\Models\FoodItem::factory()->count(4)->create(['categories_id'=>$category->id]);
        });

        // Category::factory(4)->create()
        //     ->each(function($category){
        //     FoodItem::create([
        //         'categories_id' => $category->id,
        //         'name' => fake()->name(),
        //         'ingredients' => fake()->paragraph(),
        //         'price' => fake()->randomFloat($nbMaxDecimals = 2, $min = 1, $max = 50),
        //         'rating' => fake()->randomFloat($nbMaxDecimals = 2, $min = 4, $max = 5),
        //     ]);
        // });

        // $this->call(CategorySeeder::class);
        // $this->call(DeviceSeeder::class);
        // $this->call(DeviceMemorySeeder::class);
        // $this->call(ItemSeeder::class);

        // \App\Models\Sale::factory(30)->create();
        // \App\Models\Sale::factory(30)->create();
        // Shop::factory(5)->has(Sale::factory()->count(30))->create();
        // factory(App\Models\Sale::class, 50)->create();

    }
}
