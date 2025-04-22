<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run()
    {
        Product::create([
            'name' => 'Product 1',
            'price' => 100,
        ]);
        Product::create([
            'name' => 'Product 2',
            'price' => 200,
        ]);
        // Tambahkan lebih banyak produk jika diperlukan
    }
}
