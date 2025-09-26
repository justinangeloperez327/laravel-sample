<?php

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('items')
            ->insert([
                [
                    'name' => 'Samsung Galaxy S23',
                    'sku' => 'SGS23',
                    'description' => 'Flagship Samsung Galaxy S23 with cutting-edge technology',
                    'reorder_level' => 20,
                    'created_by' => 1,
                ],
                [
                    'name' => 'Google Pixel 8',
                    'sku' => 'GP8',
                    'description' => 'Google Pixel 8 with exceptional camera capabilities',
                    'reorder_level' => 10,
                    'created_by' => 1,
                ],
                [
                    'name' => 'OnePlus 11',
                    'sku' => 'OP11',
                    'description' => 'OnePlus 11 with high performance and fast charging',
                    'reorder_level' => 25,
                    'created_by' => 1,
                ],
                [
                    'name' => 'Sony Xperia 1 IV',
                    'sku' => 'SX1IV',
                    'description' => 'Sony Xperia 1 IV with stunning display and audio quality',
                    'reorder_level' => 5,
                    'created_by' => 1,
                ],
                [
                    'name' => 'Motorola Edge 30',
                    'sku' => 'ME30',
                    'description' => 'Motorola Edge 30 with sleek design and powerful features',
                    'reorder_level' => 15,
                    'created_by' => 1,
                ],
                [
                    'name' => 'Nokia X30',
                    'sku' => 'NX30',
                    'description' => 'Nokia X30 with durable build and reliable performance',
                    'reorder_level' => 30,
                    'created_by' => 1,
                ],
                [
                    'name' => 'Asus ROG Phone 7',
                    'sku' => 'AROG7',
                    'description' => 'Asus ROG Phone 7 with gaming-centric features and high refresh rate',
                    'reorder_level' => 8,
                    'created_by' => 1,
                ],
                [
                    'name' => 'Xiaomi 13 Pro',
                    'sku' => 'X13P',
                    'description' => 'Xiaomi 13 Pro with advanced camera system and fast performance',
                    'reorder_level' => 12,
                    'created_by' => 1,
                ],
                [
                    'name' => 'Oppo Find X6 Pro',
                    'sku' => 'OFX6P',
                    'description' => 'Oppo Find X6 Pro with innovative design and powerful specs',
                    'reorder_level' => 18,
                    'created_by' => 1,
                ],
                [
                    'name' => 'Vivo X90 Pro+',
                    'sku' => 'VX90P',
                    'description' => 'Vivo X90 Pro+ with exceptional camera performance and sleek design',
                    'reorder_level' => 22,
                    'created_by' => 1,
                ],
                [
                    'name' => 'Realme GT 3',
                    'sku' => 'RGT3',
                    'description' => 'Realme GT 3 with high refresh rate display and fast charging',
                    'reorder_level' => 14,
                    'created_by' => 1,
                ],
                [
                    'name' => 'ZTE Axon 40 Ultra',
                    'sku' => 'ZAX40U',
                    'description' => 'ZTE Axon 40 Ultra with under-display camera and premium features',
                    'reorder_level' => 7,
                    'created_by' => 1,
                ]
            ]);
    }
}
