<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class WarehouseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('warehouses')->insert([
            [
                'name' => 'Main Warehouse',
                'location' => '123 Main St, Cityville',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Secondary Warehouse',
                'location' => '456 Side St, Townsville',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Overflow Warehouse',
                'location' => '789 Overflow Rd, Villagetown',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
