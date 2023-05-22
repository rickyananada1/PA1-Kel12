<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller; // Tambahkan baris ini
use App\Models\Blog;
use App\Models\Testimony;
use App\Models\Destination;

class HomeController extends Controller
{
    public function welcome()
    {
        $destinations = Destination::with('galleries')->get();

        $blogs = Blog::with('galleries')->paginate(4);

        $testimonies = Testimony::get();

        return view('front.welcome', compact('destinations', 'blogs', 'testimonies'));
    }
    
    public function tentangkami()
    {
        return view('front.tentangkami');
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
