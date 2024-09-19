<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Category::create([
            'name' => 'Electronics',
            'description' => 'Electronic gadgets and devices'
        ]);
    
        \App\Models\Category::create([
            'name' => 'Clothing',
            'description' => 'Apparel and fashion wear'
        ]);
    }
}
