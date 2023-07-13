<?php

namespace Database\Seeders;

use App\Models\Brand;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
class DeviceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $samsung_brand = Brand::where('brand_name', 'Samsung')->first()->id;
        $apple_brand = Brand::where('brand_name', 'Apple')->first()->id;
        $device_category = [
            [
                'id' => Str::uuid(),
                'category_name' => 'Mobile',
                'category_icon' => 'fa-solid fa-mobile-screen',
                'brand_id'=> $samsung_brand,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => Str::uuid(),
                'category_name' => 'iPhone',
                'category_icon' => 'fa-solid fa-mobile-screen',
                'brand_id'=> $apple_brand,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => Str::uuid(),
                'category_name' => 'Tablet',
                'category_icon' => 'fa-sharp fa-solid fa-tablet-screen-button',
                'brand_id'=> $samsung_brand,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            
            [
                'id' => Str::uuid(),
                'category_name' => 'iPad',
                'category_icon' => 'fa-solid fa-tablet-screen-button',
                'brand_id'=> $apple_brand,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

        ];

        DB::table('devices')->insert($device_category);
    }
}
