<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DestinasiKategori;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Requests\Admin\DestinasiKategoriRequest;

class DestinasiKategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // mengambil semua data dari tabel destinasi_kategori
        $destinasi_kategoris = DestinasiKategori::all();
        // mengembalikan data ke halaman index
        return view('admin.destinasi_kategori.index', compact('destinasi_kategoris'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.destinasi_kategori.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DestinasiKategoriRequest $request)
    {
        if ($request->validated()) {
            $slug = Str::slug($request->nama . '-');
            DestinasiKategori::create($request->validated() + ['slug' => $slug]);
        }

        // kembalikan ke halaman index dan tampilkan pesan berhasil
        return redirect()->route('destinasikategori.index')->with([
            'message' => 'Kategori Destinasi berhasil ditambahkan!',
            'alert-type' => 'succes'
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
    public function edit(DestinasiKategori $destinasikategori)
    {
        // Kirim data destinasi_kategori ke view edit.blade.php
        return view('admin.destinasi_kategori.edit', compact('destinasikategori')); 
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DestinasiKategoriRequest $request, DestinasiKategori $destinasikategori)
    {
        if ($request->validated()) {
            $slug = Str::slug($request->nama, '-');
            $destinasikategori->update($request->validated() + ['slug' => $slug]);
        }
        // Redirect ke halaman lain atau tampilkan pesan sukses
        return redirect()->route('destinasikategori.index')->with('success', 'kategori updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(DestinasiKategori $destinasikategori)
    {
        $destinasikategori->delete();

        return redirect()->back()->with([
            'message' => 'Kategori Destinasi berhasil dihapus!',
            'alert-type' => 'danger'
        ]);
    }
}
