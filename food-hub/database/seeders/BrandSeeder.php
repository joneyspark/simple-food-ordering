<?php

namespace Database\Seeders;

use App\Models\Device;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $brands = [
            [
                'id' => Str::uuid(),
                'brand_name' => 'Samsung',
                'brand_icon' => 'fa-solid fa-mobile-screen',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            
            [
                'id' => Str::uuid(),
                'brand_name' => 'Apple',
                'brand_icon' => 'fab fa-apple',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => Str::uuid(),
                'brand_name' => 'Motorola',
                'brand_icon' => 'fa-solid fa-mobile-screen',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => Str::uuid(),
                'brand_name' => 'Nokia',
                'brand_icon' => 'fa-solid fa-mobile-screen',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => Str::uuid(),
                'brand_name' => 'Huawei',
                'brand_icon' => 'fa-solid fa-mobile-screen',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

        ];
        DB::table('brands')->insert($brands);
    }
}
