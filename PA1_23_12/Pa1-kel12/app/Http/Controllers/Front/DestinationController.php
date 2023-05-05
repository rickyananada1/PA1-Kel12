<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Destination;
use App\Models\DestinationCategory;
use App\Models\DestinationGallery;

class DestinationController extends Controller
{
    public function index()
    {
        $destinations = Destination::with('galleries')
                                    ->where('is_share',1)
                                    ->orderBy('created_at', 'desc')
                                    ->paginate(8);

        return view('front.destination.index', compact('destinations'));
    }

    public function show(Destination $destination)
    {
        $destinations = Destination::where('id', '!=', $destination->id)->get();
        $categories = DestinationCategory::all();

        return view('front.destination.show', compact('destination', 'destinations', 'categories'));
    }
}
