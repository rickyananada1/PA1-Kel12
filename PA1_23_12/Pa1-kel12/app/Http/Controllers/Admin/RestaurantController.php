<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Restaurant;
use App\Models\Destination;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use App\Http\Requests\Admin\RestaurantRequest;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $restaurants = Restaurant::with('destination')->paginate(10);
        return view('admin.restaurant.index', compact('restaurants'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $destinations = Destination::get(['name', 'id']);
        return view('admin.restaurant.create', compact('destinations'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RestaurantRequest $request)
    {
        if ($request->validated()) {
            $image = $request->file('image')->store(
                'destination/restaurant',
                'public'
            );
            $slug = Str::slug($request->name, '-');

            Restaurant::create($request->except('image') + ['slug' => $slug, 'image' => $image]);
        }

        return redirect()->route('restaurant.index')->with([
            'message' => 'Success Created !',
            'alert-type' => 'success'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Restaurant $restaurant)
    {
        $destinations = Destination::get(['name', 'id']);
        return view('admin.restaurant.edit', compact('restaurant', 'destinations'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RestaurantRequest $request, Restaurant $restaurant)
    {
        if ($request->validated()) {
            $slug = Str::slug($request->name, '-');
            if ($request->image) {
                File::delete('storage/' . $restaurant->image);
                $image = $request->file('image')->store(
                    'destination/restaurant',
                    'public'
                );
                $restaurant->update($request->except('image') + ['slug' => $slug, 'image' => $image]);
            } else {
                $restaurant->update($request->validated() + ['slug' => $slug]);
            }
        }
        return redirect()->route('restaurant.index')->with([
            'message' => 'Success Updated !',
            'alert-type' => 'info'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Restaurant $restaurant)
    {
        File::delete('storage/' . $restaurant->image);
        $restaurant->delete();

        return redirect()->back()->with([
            'message' => 'Success Deleted !',
            'alert-type' => 'danger'
        ]);
    }
}
