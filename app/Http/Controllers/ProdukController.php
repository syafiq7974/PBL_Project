<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        // Contoh data produk, sesuaikan dengan data yang sebenarnya
        $produk = [
            ['image' => 'images/pensil.jpeg', 'name' => 'Produk 1', 'rating' => 4.5, 'harga' => 100000],
            ['image' => 'images/pulpen.jpeg', 'name' => 'Produk 2', 'rating' => 4.0, 'harga' => 150000],
            ['image' => 'images/spidol.jpeg', 'name' => 'Produk 3', 'rating' => 5.0, 'harga' => 200000],
            ['image' => 'images/buket_bunga.jpeg', 'name' => 'Produk 4', 'rating' => 3.5, 'harga' => 75000],
            ['image' => 'images/buket_uang.jpeg', 'name' => 'Produk 5', 'rating' => 4.2, 'harga' => 120000],
            ['image' => 'images/bunga.jpeg', 'name' => 'Produk 6', 'rating' => 4.8, 'harga' => 180000],
        ];

        return view('produk', compact('produk'));
    }
}