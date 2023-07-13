<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Brand;
use App\Models\Device;
use App\Models\DeviceMemory;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Brand
        $samsung_brand = Brand::where('brand_name', 'Samsung')->first()->id;
        $apple_brand = Brand::where('brand_name', 'Apple')->first()->id;
        $huawei_brand = Brand::where('brand_name', 'Huawei')->first()->id;
        // Type
        $type_iphone = Device::where('category_name', 'iPhone')->first()->id;
        $type_mobile = Device::where('category_name', 'Mobile')->first()->id;
        $type_table = Device::where('category_name', 'Tablet')->first()->id;
        $type_ipad = Device::where('category_name', 'iPad')->first()->id;
        // Memory
        $GB_16 = DeviceMemory::where('memory', '16 GB')->first()->id;
        $GB_32 = DeviceMemory::where('memory', '32 GB')->first()->id;
        $GB_64 = DeviceMemory::where('memory', '64 GB')->first()->id;
        $GB_128 = DeviceMemory::where('memory', '128 GB')->first()->id;
        $GB_256 = DeviceMemory::where('memory', '256 GB')->first()->id;
        $GB_512 = DeviceMemory::where('memory', '512 GB')->first()->id;
        $items = [
            [
                'id' => Str::uuid(),
                'item_name' => 'iPhone 5',

                'memory_id' => $GB_16,
                'brand_id' => $apple_brand,
                'device_id' => $type_iphone,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => Str::uuid(),
                'item_name' => 'iPhone 6',

                'memory_id' => $GB_32,
                'brand_id' => $apple_brand,
                'device_id' => $type_iphone,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'id' => Str::uuid(),
                'item_name' => 'iPhone 6s',

                'memory_id' => $GB_32,
                'brand_id' => $apple_brand,
                'device_id' => $type_iphone,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => Str::uuid(),
                'item_name' => 'iPhone 6 Plus',

                'memory_id' => $GB_32,
                'brand_id' => $apple_brand,
                'device_id' => $type_iphone,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => Str::uuid(),
                'item_name' => 'iPhone 6s Plus',

                'memory_id' => $GB_32,
                'brand_id' => $apple_brand,
                'device_id' => $type_iphone,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => Str::uuid(),
                'item_name' => 'iPhone 7',

                'memory_id' => $GB_32,
                'brand_id' => $apple_brand,
                'device_id' => $type_iphone,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => Str::uuid(),
                'item_name' => 'iPhone 7',

                'memory_id' => $GB_64,
                'brand_id' => $apple_brand,
                'device_id' => $type_iphone,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => Str::uuid(),
                'item_name' => 'iPhone 7',

                'memory_id' => $GB_128,
                'brand_id' => $apple_brand,
                'device_id' => $type_iphone,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => Str::uuid(),
                'item_name' => 'iPhone 7',

                'memory_id' => $GB_256,
                'brand_id' => $apple_brand,
                'device_id' => $type_iphone,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => Str::uuid(),
                'item_name' => 'iPhone 7 Plus',

                'memory_id' => $GB_32,
                'brand_id' => $apple_brand,
                'device_id' => $type_iphone,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'id' => Str::uuid(),
                'item_name' => 'iPhone 7 Plus',

                'memory_id' => $GB_64,
                'brand_id' => $apple_brand,
                'device_id' => $type_iphone,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'id' => Str::uuid(),
                'item_name' => 'iPhone 8',

                'memory_id' => $GB_64,
                'brand_id' => $apple_brand,
                'device_id' => $type_iphone,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'id' => Str::uuid(),
                'item_name' => 'iPhone 8',

                'memory_id' => $GB_128,
                'brand_id' => $apple_brand,
                'device_id' => $type_iphone,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => Str::uuid(),
                'item_name' => 'iPhone 8',

                'memory_id' => $GB_256,
                'brand_id' => $apple_brand,
                'device_id' => $type_iphone,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'id' => Str::uuid(),
                'item_name' => 'iPhone 8 Plus',

                'memory_id' => $GB_64,
                'brand_id' => $apple_brand,
                'device_id' => $type_iphone,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'id' => Str::uuid(),
                'item_name' => 'iPhone 8 Plus',

                'memory_id' => $GB_128,
                'brand_id' => $apple_brand,
                'device_id' => $type_iphone,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'id' => Str::uuid(),
                'item_name' => 'iPhone X',

                'memory_id' => $GB_64,
                'brand_id' => $apple_brand,
                'device_id' => $type_iphone,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'id' => Str::uuid(),
                'item_name' => 'iPhone X',

                'memory_id' => $GB_128,
                'brand_id' => $apple_brand,
                'device_id' => $type_iphone,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => Str::uuid(),
                'item_name' => 'iPhone X',

                'memory_id' => $GB_256,
                'brand_id' => $apple_brand,
                'device_id' => $type_iphone,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'id' => Str::uuid(),
                'item_name' => 'iPhone Xs',

                'memory_id' => $GB_64,
                'brand_id' => $apple_brand,
                'device_id' => $type_iphone,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'id' => Str::uuid(),
                'item_name' => 'iPhone Xs',

                'memory_id' => $GB_128,
                'brand_id' => $apple_brand,
                'device_id' => $type_iphone,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => Str::uuid(),
                'item_name' => 'iPhone Xs',

                'memory_id' => $GB_256,
                'brand_id' => $apple_brand,
                'device_id' => $type_iphone,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'id' => Str::uuid(),
                'item_name' => 'iPhone Xs Max',

                'memory_id' => $GB_128,
                'brand_id' => $apple_brand,
                'device_id' => $type_iphone,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'id' => Str::uuid(),
                'item_name' => 'iPhone Xs Max',

                'memory_id' => $GB_256,
                'brand_id' => $apple_brand,
                'device_id' => $type_iphone,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'id' => Str::uuid(),
                'item_name' => 'iPhone XR',

                'memory_id' => $GB_64,
                'brand_id' => $apple_brand,
                'device_id' => $type_iphone,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'id' => Str::uuid(),
                'item_name' => 'iPhone XR',

                'memory_id' => $GB_128,
                'brand_id' => $apple_brand,
                'device_id' => $type_iphone,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => Str::uuid(),
                'item_name' => 'iPhone XR',

                'memory_id' => $GB_256,
                'brand_id' => $apple_brand,
                'device_id' => $type_iphone,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'id' => Str::uuid(),
                'item_name' => 'iPhone 11',

                'memory_id' => $GB_64,
                'brand_id' => $apple_brand,
                'device_id' => $type_iphone,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'id' => Str::uuid(),
                'item_name' => 'iPhone 11',

                'memory_id' => $GB_128,
                'brand_id' => $apple_brand,
                'device_id' => $type_iphone,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'id' => Str::uuid(),
                'item_name' => 'iPhone 11',

                'memory_id' => $GB_256,
                'brand_id' => $apple_brand,
                'device_id' => $type_iphone,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'id' => Str::uuid(),
                'item_name' => 'iPhone 11 Pro',

                'memory_id' => $GB_64,
                'brand_id' => $apple_brand,
                'device_id' => $type_iphone,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'id' => Str::uuid(),
                'item_name' => 'iPhone 11 Pro',

                'memory_id' => $GB_128,
                'brand_id' => $apple_brand,
                'device_id' => $type_iphone,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => Str::uuid(),
                'item_name' => 'iPhone 11 Pro',

                'memory_id' => $GB_256,
                'brand_id' => $apple_brand,
                'device_id' => $type_iphone,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'id' => Str::uuid(),
                'item_name' => 'iPhone 11 Pro Max',

                'memory_id' => $GB_64,
                'brand_id' => $apple_brand,
                'device_id' => $type_iphone,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'id' => Str::uuid(),
                'item_name' => 'iPhone 11 Pro Max',

                'memory_id' => $GB_128,
                'brand_id' => $apple_brand,
                'device_id' => $type_iphone,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => Str::uuid(),
                'item_name' => 'iPhone 11 Pro Max',

                'memory_id' => $GB_256,
                'brand_id' => $apple_brand,
                'device_id' => $type_iphone,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'id' => Str::uuid(),
                'item_name' => 'iPhone 12',

                'memory_id' => $GB_128,
                'brand_id' => $apple_brand,
                'device_id' => $type_iphone,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'id' => Str::uuid(),
                'item_name' => 'iPhone 12',

                'memory_id' => $GB_256,
                'brand_id' => $apple_brand,
                'device_id' => $type_iphone,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'id' => Str::uuid(),
                'item_name' => 'iPhone 12',

                'memory_id' => $GB_512,
                'brand_id' => $apple_brand,
                'device_id' => $type_iphone,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'id' => Str::uuid(),
                'item_name' => 'iPhone 12 Pro',

                'memory_id' => $GB_128,
                'brand_id' => $apple_brand,
                'device_id' => $type_iphone,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'id' => Str::uuid(),
                'item_name' => 'iPhone 12 Pro',

                'memory_id' => $GB_256,
                'brand_id' => $apple_brand,
                'device_id' => $type_iphone,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => Str::uuid(),
                'item_name' => 'iPhone 12 Pro',

                'memory_id' => $GB_512,
                'brand_id' => $apple_brand,
                'device_id' => $type_iphone,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'id' => Str::uuid(),
                'item_name' => 'iPhone 12 Pro Max',

                'memory_id' => $GB_128,
                'brand_id' => $apple_brand,
                'device_id' => $type_iphone,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'id' => Str::uuid(),
                'item_name' => 'iPhone 12 Pro Max',

                'memory_id' => $GB_256,
                'brand_id' => $apple_brand,
                'device_id' => $type_iphone,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => Str::uuid(),
                'item_name' => 'iPhone 12 Pro Max',

                'memory_id' => $GB_512,
                'brand_id' => $apple_brand,
                'device_id' => $type_iphone,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'id' => Str::uuid(),
                'item_name' => 'iPhone 13',

                'memory_id' => $GB_128,
                'brand_id' => $apple_brand,
                'device_id' => $type_iphone,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'id' => Str::uuid(),
                'item_name' => 'iPhone 13',

                'memory_id' => $GB_256,
                'brand_id' => $apple_brand,
                'device_id' => $type_iphone,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => Str::uuid(),
                'item_name' => 'iPhone 13',

                'memory_id' => $GB_512,
                'brand_id' => $apple_brand,
                'device_id' => $type_iphone,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'id' => Str::uuid(),
                'item_name' => 'iPhone 13 Pro',

                'memory_id' => $GB_128,
                'brand_id' => $apple_brand,
                'device_id' => $type_iphone,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'id' => Str::uuid(),
                'item_name' => 'iPhone 13 Pro',

                'memory_id' => $GB_256,
                'brand_id' => $apple_brand,
                'device_id' => $type_iphone,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => Str::uuid(),
                'item_name' => 'iPhone 13 Pro',

                'memory_id' => $GB_512,
                'brand_id' => $apple_brand,
                'device_id' => $type_iphone,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'id' => Str::uuid(),
                'item_name' => 'iPhone 13 Pro Max',

                'memory_id' => $GB_128,
                'brand_id' => $apple_brand,
                'device_id' => $type_iphone,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => Str::uuid(),
                'item_name' => 'iPhone 13 Pro Max',

                'memory_id' => $GB_256,
                'brand_id' => $apple_brand,
                'device_id' => $type_iphone,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => Str::uuid(),
                'item_name' => 'iPhone 13 Pro Max',

                'memory_id' => $GB_512,
                'brand_id' => $apple_brand,
                'device_id' => $type_iphone,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => Str::uuid(),
                'item_name' => 'Samsung A12',
                'memory_id' => $GB_64,
                'brand_id' => $samsung_brand,
                'device_id' => $type_mobile,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => Str::uuid(),
                'item_name' => 'Samsung A13 4G',
                'memory_id' => $GB_64,
                'brand_id' => $samsung_brand,
                'device_id' => $type_mobile,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => Str::uuid(),
                'item_name' => 'Samsung A13 5G',
                'memory_id' => $GB_64,
                'brand_id' => $samsung_brand,
                'device_id' => $type_mobile,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => Str::uuid(),
                'item_name' => 'Samsung A22 5G',
                'memory_id' => $GB_64,
                'brand_id' => $samsung_brand,
                'device_id' => $type_mobile,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => Str::uuid(),
                'item_name' => 'Huawei Y9',
                'memory_id' => $GB_64,
                'brand_id' => $huawei_brand,
                'device_id' => $type_mobile,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => Str::uuid(),
                'item_name' => 'Huawei P20 LIte',
                'memory_id' => $GB_64,
                'brand_id' => $huawei_brand,
                'device_id' => $type_mobile,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => Str::uuid(),
                'item_name' => 'Huawei P20 Pro',
                'memory_id' => $GB_64,
                'brand_id' => $huawei_brand,
                'device_id' => $type_mobile,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => Str::uuid(),
                'item_name' => 'Huawei P30 Pro',
                'memory_id' => $GB_64,
                'brand_id' => $huawei_brand,
                'device_id' => $type_mobile,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],



        ];

        DB::table('items')->insert($items);
    }
}
