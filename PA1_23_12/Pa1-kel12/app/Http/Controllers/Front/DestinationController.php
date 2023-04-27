<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Destination;
use App\Models\DestinationGallery;
use App\Models\DestinationCategory;

class DestinationController extends Controller
{
    public function index()
    {
        $destinations = Destination::with('destinationGallery')->paginate(10);
        return view('front.destinations', compact('destinations'));
    }

    public function show($slug)
    {
        $destination = Destination::where('slug', $slug)->with('destinationGallery')->firstOrFail();
        $relatedDestinations = Destination::where('destination_category_id', $destination->destination_category_id)
            ->where('id', '!=', $destination->id)
            ->inRandomOrder()
            ->take(3)
            ->get();
        return view('destination.show', compact('destination', 'relatedDestinations'));
    }
}
