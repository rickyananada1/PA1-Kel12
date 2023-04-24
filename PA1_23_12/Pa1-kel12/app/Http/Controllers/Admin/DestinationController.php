<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Destination;
use Illuminate\Support\Str;
use App\Models\DestinationCategory;
use App\Models\Kabupaten;
use Illuminate\Http\Request;
use App\Models\DestinationGallery;
use App\Http\Requests\Admin\DestinationRequest;

class DestinationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $destinations = Destination::paginate(10);

        return view('admin.destination.index', compact('destinations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $destinationCategories = DestinationCategory::all();
        $kabupatens = Kabupaten::all();
        return view('admin.destination.create', compact('destinationCategories', 'kabupatens'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DestinationRequest $request)
    {
        if ($request->validated()) {
            $slug = Str::slug($request->location, '-');
            $destination = Destination::create($request->validated() + ['slug' => $slug]);
        }

        return redirect()->route('destination.edit', [$destination])->with([
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
    public function edit(Destination $destination)
    {
        $destinationGalleries = DestinationGallery::paginate(10);
        $destinationCategories = DestinationCategory::all();
        $kabupatens = Kabupaten::all();

        return view('admin.destination.edit', compact('destinationGalleries', 'destination', 'destinationCategories', 'kabupatens'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DestinationRequest $request, Destination $destination)
    {
        if ($request->validated()) {
            $slug = Str::slug($request->location, '-');
            $destination->update($request->validated() + ['slug' => $slug]);
        }

        return redirect()->route('destination.index')->with([
            'message' => 'Success Updated !',
            'alert-type' => 'success'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Destination $destination)
    {
        $destination->delete();

        return redirect()->back()->with([
            'message' => 'Success Deleted !',
            'alert-type' => 'danger'
        ]);
    }
}
