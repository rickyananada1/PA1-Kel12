<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\BlogCategory;
use App\Models\Kabupaten;
use Illuminate\Http\Request;
use App\Models\Restaurant;
use App\Models\Destination;
use App\Models\Testimony;

class RestaurantController extends Controller
{
    public function index(Request $request)
    {
        $selectedKabupaten = $request->input('kabupaten');

        if ($selectedKabupaten) {

            $restaurants = Restaurant::with('galleries')
                ->where('is_share', 1)
                ->where('kabupaten_id', $selectedKabupaten)
                ->orderBy('created_at', 'desc')
                ->paginate(8);
        } else {

            $restaurants = Restaurant::with('galleries')
                ->where('is_share', 1)
                ->orderBy('created_at', 'desc')
                ->paginate(8);
        }

        $kabupatens = Kabupaten::get();

        $blogCategories = BlogCategory::all();

        return view('front.restaurant.index', compact('restaurants', 'kabupatens', 'selectedKabupaten', 'blogCategories'));
    }

    public function show(Restaurant $restaurant)
    {

        $testimonies = Testimony::where('status', 1)
            ->orderBy('created_at', 'desc')
            ->where('restaurant_id', $restaurant->id)
            ->paginate(6);

        $kabupatens = Kabupaten::get();

        $kabupaten = $restaurant->kabupaten->id;

        $destinations = Destination::with('galleries')
            ->where('is_share', 1)
            ->orderBy('created_at', 'desc')
            ->where('kabupaten_id', $kabupaten)
            ->paginate(8);

        $blogCategories = BlogCategory::all();

        return view('front.restaurant.show', compact('restaurant', 'kabupatens', 'destinations', 'blogCategories', 'testimonies'));
    }

    public function testimonies(Request $request)
    {
        $validatedData = $request->validate([
            'description' => 'required',
            'kabupaten_id' => 'required',
            'restaurant_id' => 'required',
            'contributor_id' => 'required',
        ]);

        // Simpan testimoni ke database
        $testimony = new Testimony;
        $testimony->description = $validatedData['description'];
        // set nilai restaurant_iddestination blog_idestinationnjadi null
        $testimony->blog_id = null;
        $testimony->destination_id = null;
        $testimony->status = 0;
        $testimony->restaurant_id = $validatedData['restaurant_id'];
        $testimony->kabupaten_id = $validatedData['kabupaten_id'];
        $testimony->contributor_id = $validatedData['contributor_id'];
        $testimony->save();

        return redirect()->back()->with('success', 'Testimoni berhasil ditambahkan');
    }
}
