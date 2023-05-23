<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Kabupaten;
use Illuminate\Http\Request;
use App\Models\Restaurant;

class RestaurantController extends Controller
{
    public function index()
    {
        $restaurants = Restaurant::with('galleries')
            ->where('is_share', 1)
            ->orderBy('created_at', 'desc')
            ->paginate(8);

        // Pengecekan kategori "tempat"
        // $restaurants = $restaurants->filter(function ($restaurant) {
        //     return $restaurant->galleries->where('category', 'place')->count() > 0;
        // });

        $kabupatens = Kabupaten::get();

        return view('front.restaurant.index', compact('restaurants', 'kabupatens'));
    }

    public function show(Restaurant $restaurant)
    {
        $kabupatens = Kabupaten::get();
        return view('front.restaurant.show', compact('restaurant', 'kabupatens'));
    }
}
