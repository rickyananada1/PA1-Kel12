<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Accommodation;
use App\Models\Destination;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use App\Http\Requests\Admin\AccommodationRequest;

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
        return view('admin.accommodation.index', compact('accommodations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $destinations = Destination::get(['name', 'id']);
        return view('admin.accommodation.create', compact('destinations'));
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
            $image = $request->file('image')->store(
                'destination/accommodation',
                'public'
            );
            $slug = Str::slug($request->name, '-');

            Accommodation::create($request->except('image') + ['slug' => $slug, 'image' => $image]);
        }

        return redirect()->route('admin.accommodation.index')->with([
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
        $destinations = Destination::get(['name', 'id']);
        return view('admin.accommodation.edit', compact('accommodation', 'destinations'));
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
            $slug = Str::slug($request->name, '-');
            if ($request->image) {
                File::delete('storage/' . $accommodation->image);
                $image = $request->file('image')->store(
                    'destination/accommodation',
                    'public'
                );
                $accommodation->update($request->except('image') + ['slug' => $slug, 'image' => $image]);
            } else {
                $accommodation->update($request->validated() + ['slug' => $slug]);
            }
        }
        return redirect()->route('admin.accommodation.index')->with([
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
    public function destroy(Accommodation $accommodation)
    {
        File::delete('storage/' . $accommodation->image);
        $accommodation->delete();

        return redirect()->back()->with([
            'message' => 'Success Deleted !',
            'alert-type' => 'danger'
        ]);
    }
}
