<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KulinerController extends Controller
{
    public function index()
    {
        $makanan = [
            [
                'nama' => 'Laksa',
                'harga' => '55K',
                'rating' => 4.7,
                'asal' => 'khas Batam',
                'gambar' => 'laksa.jpg',
            ],
            [
                'nama' => 'Otak-Otak',
                'harga' => '30K',
                'rating' => 4.9,
                'asal' => 'khas Batam',
                'gambar' => 'otak-otak.jpg',
            ],
            [
                'nama' => 'Gonggong',
                'harga' => '80K',
                'rating' => 4.8,
                'asal' => 'khas Batam',
                'gambar' => 'gonggong.jpg',
            ],
        ];

        $restoran = [
            [
                'nama' => 'Bengkong Laut',
                'alamat' => 'Jl. Bengkong Jaya',
                'gambar' => 'bengkong.jpg',
            ],
            [
                'nama' => 'Harbourbay',
                'alamat' => 'Jl. Harbour Bay',
                'gambar' => 'harbour.jpg',
            ],
            [
                'nama' => 'Marina Seafood',
                'alamat' => 'Jl. Raya Marina City',
                'gambar' => 'marina.jpg',
            ],
        ];

        return view('kuliner.index', compact('makanan', 'restoran'));
    }
}
