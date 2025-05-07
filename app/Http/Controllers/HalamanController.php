<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanController extends Controller
{
    public function tentangKami()
    {
        return view('tentang-kami'); // Nama file blade: tentang-kami.blade.php
    }
}
