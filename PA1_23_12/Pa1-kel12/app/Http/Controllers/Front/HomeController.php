<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller; // Tambahkan baris ini
use App\Models\Destination;

class HomeController extends Controller
{
    public function welcome()
    {
        $destinations = Destination::with('galleries')->get();

        return view('front.welcome', compact('destinations'));
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
    public function kumpulanlokasi()
    {
        return view('front.kumpulanlokasi');
    }
    
}
