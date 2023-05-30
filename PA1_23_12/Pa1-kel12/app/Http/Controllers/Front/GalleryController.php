<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\BlogCategory;
use App\Models\BlogGallery;
use App\Models\Destination;
use App\Models\DestinationGallery;
use App\Models\Kabupaten;
use App\Models\Restaurant;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        $blogGalleries = BlogGallery::all();
        $destinationGalleries = DestinationGallery::all();
        $kabupatens = Kabupaten::get();
        $blogCategories = BlogCategory::all();
        $destinationCategories = Destination::all();
        $restaurants = Restaurant::get();

        return view('front.gallery.index', compact('blogGalleries', 'destinationGalleries', 'kabupatens', 'blogCategories','restaurants', 'destinationCategories'));
    }
}
