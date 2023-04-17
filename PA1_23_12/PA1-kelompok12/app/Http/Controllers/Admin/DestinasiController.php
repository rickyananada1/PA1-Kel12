<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use App\Models\Destinasi;
use App\Models\Gallery;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\DestinasiRequest;


class DestinasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $destinasis = Destinasi::paginate(10);

        return view('admin.destinasi.index', compact('destinasis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.destinasi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DestinasiRequest $request)
    {
        if ($request->validated()) {
            $slug = Str::slug($request->lokasi, '-');
            $destinasi = Destinasi::create($request->validated() + ['slug' => $slug]);
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
    public function edit(Destinasi $destinasi)
    {
        $galleries = Gallery::paginate(10);

        return view('admin.destinasi.edit', compact('destinasi', 'galleries'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DestinasiRequest $request,Destinasi $destinasi)
    {
        if ($request->validated()) {
            $slug = Str::slug($request->lokasi, '-');
            $destinasi = Destinasi::create($request->validated() + ['slug' => $slug]);
        }

        return redirect()->route('destinasi.index')->with([
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
    public function destroy(Destinasi $destinasi)
    {
        $destinasi->delete();

        return redirect()->back()->with([
            'message' => 'Success Deleted !',
            'alert-type' => 'danger'
        ]);
    }
}
