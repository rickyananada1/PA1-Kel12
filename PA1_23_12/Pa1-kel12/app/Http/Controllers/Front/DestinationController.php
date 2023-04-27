<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Destination;
use App\Models\DestinationGallery;

class DestinationController extends Controller
{
    public function index()
    {
        $destinations = Destination::with('galleries')->get();

        return view('front.destination.index', compact('destinations'));
    }

    public function show(Destination $destination)
    {
        $destinations = Destination::where('id', '!=', $destination->id)->get();

        return view('front.destination.show', compact('destination', 'destinations'));
    }
}
