<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'Kopi Susu Gula Aren',
                'sku' => 'KOPI-001',
                'price' => 15000,
                'description' => 'Kopi susu dengan gula aren asli.',
                'image' => 'https://via.placeholder.com/150',
            ],
            [
                'name' => 'Roti Bakar Coklat',
                'sku' => 'ROTI-002',
                'price' => 12000,
                'description' => 'Roti bakar dengan taburan coklat dan keju.',
                'image' => 'https://via.placeholder.com/150',
            ],
        ]);
    }
}