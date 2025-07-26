<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('products')->insert([
            'name' => 'Sample Product',
            'price' => 199.99,
            'description' => 'This is a test product',
        ]);
    }
}

