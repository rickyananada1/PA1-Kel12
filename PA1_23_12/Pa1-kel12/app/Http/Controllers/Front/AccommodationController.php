<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Accommodation;
use App\Models\BlogCategory;
use App\Models\Destination;
use App\Models\DestinationCategory;
use App\Models\Kabupaten;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;

class AccommodationController extends Controller
{
    public function index()
    {
        $destinationCategories = DestinationCategory::get();
        $blogCategories = BlogCategory::get();

        $accommodations = Accommodation::where('is_share', 1)
            // ->where('created_at', 'desc')
            ->paginate(6);

        $kabupatens = Kabupaten::get();

        return view('front.accommodation.index', compact('accommodations', 'destinationCategories', 'blogCategories', 'kabupatens'));
    }

    public function show(Accommodation $accommodation)
    {
        $blogCategories = BlogCategory::get();
        $destinationCategories = DestinationCategory::all();
        $kabupatens = Kabupaten::get();

        $popularDestinations = Destination::where('is_share', 1)
            ->where('views', 'desc')
            ->get();

        return view('front.accommodation.show', compact('accommodation', 'blogCategories', 'destinationCategories', 'kabupatens', 'popularDestinations'));
    }
}
