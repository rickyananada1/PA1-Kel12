<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller; // Tambahkan baris ini

class HomeController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }
    public function tentangkami()
    {
        return view('front.tentangkami');
    }
    public function kumpulanberita()
    {
        return view('front.kumpulanberita');
    }
        public function berita()
    {
        return view('front.berita');
    }
    
}
