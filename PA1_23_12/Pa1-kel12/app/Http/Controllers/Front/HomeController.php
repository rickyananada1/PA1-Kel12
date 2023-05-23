<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller; // Tambahkan baris ini
use App\Models\Blog;
use App\Models\Testimony;
use App\Models\Destination;
use App\Models\Kabupaten;

class HomeController extends Controller
{
    public function welcome()
    {
        $destinations = Destination::with('galleries')
            ->where('is_share', 1)
            ->orderBy('views', 'desc')
            ->get();

        $blogs = Blog::with('galleries')->paginate(4);

        $testimonies = Testimony::get();

        $kabupatens = Kabupaten::get();

        return view('front.welcome', compact('destinations', 'blogs', 'testimonies', 'kabupatens'));
    }

    public function kabupatens(Request $request, Kabupaten $kabupaten)
    {
        $selectedKabupaten = $kabupaten->id;

        $destinations = Destination::with('galleries')
            ->where('kabupaten_id', $selectedKabupaten)
            ->where('is_share', 1)
            ->orderBy('views', 'desc')
            ->get();

        $blogs = Blog::with('galleries')
            ->where('kabupaten_id', $selectedKabupaten)
            ->where('is_share', 1)
            ->orderBy('views', 'desc')
            ->get();

        $kabupatens = Kabupaten::get();

        return view('front.kabupaten', compact('destinations', 'blogs', 'kabupatens', 'kabupaten'));
    }

    public function search(Request $request)
    {
        
    }

    public function tentangkami()
    {
        return view('front.tentangkami');
    }
}
