<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KulineriauController extends Controller
{
    public function index()
    {
        // Anda bisa mengambil data kuliner di sini
        return view('pages.kulineriau');
    }
}