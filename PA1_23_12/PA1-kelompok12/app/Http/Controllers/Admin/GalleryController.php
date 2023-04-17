<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Destinasi;
use App\Models\Gallery;
use Illuminate\Support\Facades\File;
use App\Http\Requests\Admin\GalleryRequest;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GalleryRequest $request, Destinasi $destinasi)
    {
        if ($request->validated()) {
            $gambars = $request->file('gambar')->store(
                'destinasi/gallery',
                'public'
            );
            Gallery::create($request->except('gambar') + ['gambar' => $gambars, 'destinasis_id' => $destinasi->id]);
        }

        return redirect()->route('destinasi.edit', [$destinasi])->with([
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
    public function edit(Destinasi $destinasi, Gallery $gallery)
    {
        return view('admin.galleries.edit', compact('destinasi','gallery'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(GalleryRequest $request, Destinasi $destinasi, Gallery $gallery)
    {
        if ($request->validated()) {
            if ($request->gambar) {
                File::delete('storage/'. $gallery->gambar);
                $gambars = $request->file('gambar')->store(
                    'destinasi/gallery', 'public'
                );
                $gallery->update($request->except('gambar') + ['gambar' => $gambars, 'destinasis_id' => $destinasi->id]);
            } else {
                $gallery->update($request->validated());
            }
        }

        return redirect()->route('destinasi.edit', [$destinasi])->with([
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
    public function destroy(Destinasi $destinasi, Gallery $gallery)
    {
        File::delete('storage/'. $gallery->gambar);
        $gallery->delete();

        return redirect()->back()->with([
            'message' => 'Success Deleted !',
            'alert-type' => 'danger'
        ]);
    }
}
