<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\BlogGallery;
use App\Models\DestinationGallery;
use App\Models\Kabupaten;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        $blogGalleries = BlogGallery::all();
        $destinationGalleries = DestinationGallery::all();
        $kabupatens = Kabupaten::get();

        return view('front.gallery.index', compact('blogGalleries', 'destinationGalleries', 'kabupatens'));
    }
}
