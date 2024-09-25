<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{
    Product::create(['name' => 'Product 1', 'price' => 10.00, 'description' => 'Description for product 1']);
    Product::create(['name' => 'Product 2', 'price' => 20.00, 'description' => 'Description for product 2']);
}
}
