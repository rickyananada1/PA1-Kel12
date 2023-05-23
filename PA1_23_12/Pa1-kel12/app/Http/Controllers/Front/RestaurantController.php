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
        $restaurants = Restaurant::all();
        $kabupatens = Kabupaten::get();
        return view('front.restaurant.index', compact('restaurants', 'kabupatens'));
    }

    public function show(Restaurant $restaurant)
    {
        $kabupatens = Kabupaten::get();
        return view('front.restaurant.show', compact('restaurant', 'kabupatens'));
    }
}
