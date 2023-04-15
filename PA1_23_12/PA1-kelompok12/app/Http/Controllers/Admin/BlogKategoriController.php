<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BlogKategori;

class BlogKategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // mengambil semua data dari tabel blog_kategori
        $blog_kategoris = blogkategori::all();
        // mengembalikan data ke halaman index
        return view('admin.blog_kategori.index', compact('blog_kategoris'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // mengembalikan halaman create
        return view('admin.blog_kategori.create');
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
        $blog_kategori = BlogKategori::create($validatedData);

        // kembalikan ke halaman index dan tampilkan pesan berhasil
        return redirect()->route('blogkategori.index')->with([
            'message' => 'Kategori Blog berhasil ditambahkan!',
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
                // Ambil data blog_kategori berdasarkan ID
                $blog_kategori = BlogKategori::find($id); 
                // Kirim data blog_kategori ke view edit.blade.php
                return view('admin.blog_kategori.edit', compact('blog_kategori')); 
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
            'deskripsi' => 'required',
        ]);

        // Ambil data buku berdasarkan ID
        $blog_kategori = BlogKategori::find($id);
        $blog_kategori->nama = $validatedData['nama'];
        $blog_kategori->deskripsi = $validatedData['deskripsi'];
        // Simpan data buku yang telah diupdate
        $blog_kategori->save(); 
        // Redirect ke halaman lain atau tampilkan pesan sukses
        return redirect()->route('blogkategori.index')->with('success', 'kategori updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog_kategori = BlogKategori::find($id);
        $blog_kategori->delete();

        return redirect()->back()->with([
            'message' => 'Kategori Blog berhasil dihapus!',
            'alert-type' => 'danger'
        ]);
    }
}
