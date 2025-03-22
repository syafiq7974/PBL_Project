<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'Samsung Galaxy S23',
                'description' => 'Smartphone terbaru dengan kamera canggih',
                'price' => 12000000,
                'image' => 'produk1.jpg',
                'discount' => true
            ],
            [
                'name' => 'Samsung Galaxy A54',
                'description' => 'Performa kencang dengan layar super AMOLED',
                'price' => 6000000,
                'image' => 'produk2.jpg',
                'discount' => false
            ],
            [
                'name' => 'Samsung Galaxy Watch 6',
                'description' => 'Smartwatch dengan fitur kesehatan lengkap',
                'price' => 4000000,
                'image' => 'produk3.jpg',
                'discount' => true
            ],
        ]);
    }
}
