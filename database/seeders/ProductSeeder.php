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
        $product = new \App\Models\Product([
            'name' => 'product 01',
            'detail' => 'product 01 details'
        ]);
        $product->save();

        $product = new \App\Models\Product([
            'name' => 'product 02',
            'detail' => 'product 02 details'
        ]);
        $product->save();

        $product = new \App\Models\Product([
            'name' => 'product 03',
            'detail' => 'product 03 details'
        ]);
        $product->save();

        $product = new \App\Models\Product([
            'name' => 'product 04',
            'detail' => 'product 04 details'
        ]);
        $product->save();

        $product = new \App\Models\Product([
            'name' => 'product 05',
            'detail' => 'product 05 details'
        ]);
        $product->save();
    }
}
