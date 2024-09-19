<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Product::create([
            'name' => 'Smartphone',
            'description' => 'Latest model smartphone',
            'price' => 999.99,
            'category_id' => 1
        ]);
    
        \App\Models\Product::create([
            'name' => 'T-Shirt',
            'description' => 'Cotton T-Shirt',
            'price' => 19.99,
            'category_id' => 2
        ]);
    }
}
