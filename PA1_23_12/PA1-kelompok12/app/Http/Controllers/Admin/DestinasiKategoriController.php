<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DestinasiKategori;
use Illuminate\Http\Request;

class DestinasiKategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // mengambil semua data dari tabel database
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
    public function store(Request $request)
    {
        // validasi data
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'required|string',
        ]);
        // Simpan ke dalam basis data
        $destinasi_kategori = DestinasiKategori::create($validatedData);

        // kembalikan ke halaman index dan tampilkan pesan berhasil
        return redirect()->route('destinasikategori.index')->with([
            'message' => 'Kategori Destinasi berhasil ditambahkan',
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
    public function edit($id)
    {
        $destinasi_kategori = DestinasiKategori::find($id); // Ambil data destinasi_kategori berdasarkan ID
        return view('admin.destinasi_kategori.edit', compact('destinasi_kategori')); // Kirim data destinasi_kategori ke view edit.blade.php
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'required|string',
        ]);

        $destinasi_kategori = DestinasiKategori::find($id); // Ambil data buku berdasarkan ID
        $destinasi_kategori->nama = $validatedData['nama'];
        $destinasi_kategori->deskripsi = $validatedData['deskripsi'];
        $destinasi_kategori->save(); // Simpan data buku yang telah diupdate

        return redirect()->route('destinasikategori.index')->with('success', 'kategori updated successfully!'); // Redirect ke halaman lain atau tampilkan pesan sukses
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destinasi_kategori = DestinasiKategori::find($id);
        $destinasi_kategori->delete();

        return redirect()->back()->with([
            'message' => 'Kategori Destinasi berhasil dihapus!',
            'alert-type' => 'danger'
        ]);
    }
}
