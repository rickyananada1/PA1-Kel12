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
        $data = $request->all();
        $data['path'] = $request->file('path')->store(
            'destinasi/gallery', 'public'
        );

        $destinasi->galleries()->create($data);

        return redirect()->route('destinasi.edit', $destinasi)->with([
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
        return view('admin.galleries.edit', compact('destinasi', 'gallery'));
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
        if($request->path){
            File::delete('storage/' . $gallery->path);
        }

        $data = $request->all();
        $data['path'] = $request->file('path')->store(
            'destinasi/gallery', 'public'
        );
        
        $gallery->update($data);

        return redirect()->route('destinasi.edit', $destinasi)->with([
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
        if ($gallery->path) {
            File::delete('storage/' . $gallery->path);
        }

        // Mengahapus data dari tabel galleri
        $gallery->delete();

        return redirect()->back()->with([
            'message' => 'Success Deleted !',
            'alert-type' => 'danger'
        ]);
    }
}
