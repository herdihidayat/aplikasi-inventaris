<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            "name" => "Produk 1",
            "description" => "Deskripsi Produk",
            "sku" => "12345-ok",
            "price" => 10000,
            "stock" => 100,
            "category_id" => 1,
        ]);
    }
}
