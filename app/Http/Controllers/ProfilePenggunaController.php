<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilePenggunaController extends Controller
{
    public function show()
    {
        $profile = [
            'name' => 'Galaxy Store',
            'username' => 'Galaxy Store',
            'email' => 'galaxystore@gmail.com',
            'contact' => '0812345678908',
            'address' => 'Srono',
            'gender' => 'Laki-Laki',
            'bio' => 'Galaxy Store adalah platform e-commerce yang menyediakan berbagai produk elektronik, fashion, aksesoris, dan kebutuhan sehari-hari dengan harga terbaik. Sejak berdiri pada tahun 2020, Galaxy Store terus berinovasi dalam memberikan pengalaman belanja yang nyaman, cepat, dan aman bagi pelanggan di seluruh Indonesia.',
            'image' => asset('images/logo.jpg')
        ];

        return view('profil', compact('profile'));
    }
}
