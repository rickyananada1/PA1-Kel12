<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Kabupaten;
use Illuminate\Http\Request;
use App\Models\Restaurant;
use App\Models\Destination;

class RestaurantController extends Controller
{
    public function index()
    {
        $restaurants = Restaurant::with('galleries')
            ->where('is_share', 1)
            ->orderBy('created_at', 'desc')
            ->paginate(8);

        $kabupatens = Kabupaten::get();

        return view('front.restaurant.index', compact('restaurants', 'kabupatens'));
    }

    public function show(Restaurant $restaurant)
    {
        $kabupatens = Kabupaten::get();

        $kabupaten = $restaurant->kabupaten->id;

        $destinations = Destination::with('galleries')
        ->where('is_share', 1)
        ->orderBy('created_at', 'desc')
        ->where('kabupaten_id', $kabupaten)
        ->paginate(8);
        
        return view('front.restaurant.show', compact('restaurant', 'kabupatens', 'destinations'));
    }
}
