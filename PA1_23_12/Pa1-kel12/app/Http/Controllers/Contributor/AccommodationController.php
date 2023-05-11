<?php

namespace App\Http\Controllers\Contributor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Accommodation;
use App\Models\Destination;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use App\Http\Requests\Contributor\AccommodationRequest;
use App\Models\AccommodationGallery;

class AccommodationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $accommodations = Accommodation::with('destination')->paginate(10);
        return view('contributor.accommodation.index', compact('accommodations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $destinations = Destination::get(['name', 'id']);
        return view('contributor.accommodation.create', compact('destinations'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AccommodationRequest $request)
    {
        if ($request->validated()) {
            $slug = Str::slug($request->location, '-');
            $accommodation = Accommodation::create($request->validated() + ['slug' => $slug]);
        }

        return redirect()->route('contributor.accommodation.edit', [$accommodation])->with([
            'message' => 'Akomodasi baru berhasil ditambahkan!',
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
    public function edit(Accommodation $accommodation)
    {
        $accommodationGalleries = AccommodationGallery::paginate(10);
        $destinations = Destination::get(['name', 'id']);
        return view('contributor.accommodation.edit', compact('accommodation', 'destinations','accommodationGalleries'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AccommodationRequest $request, Accommodation $accommodation)
    {
        if ($request->validated()) {
            $slug = Str::slug($request->location, '-'). time();
            $accommodation->update($request->validated() + ['slug' => $slug]);
        }

        return redirect()->route('contributor.accommodation.index')->with([
            'message' => 'Data Akomodasi Berhasil Diupdate!',
            'alert-type' => 'success'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Accommodation $accommodation)
    {
        $accommodation->delete();

        return redirect()->back()->with([
            'message' => 'Success Deleted !',
            'alert-type' => 'danger'
        ]);
    }
}
