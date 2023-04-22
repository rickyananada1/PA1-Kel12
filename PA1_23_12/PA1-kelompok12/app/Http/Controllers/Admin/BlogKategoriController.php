<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BlogKategori;
use Illuminate\Support\Str;
use App\Http\Requests\Admin\BlogKategoriRequest;
use App\Models\BlogGallery;

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
        $blogkategoris = BlogKategori::all();
        // mengembalikan data ke halaman index
        return view('admin.blog_kategori.index', compact('blogkategoris'));
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
    public function store(BlogKategoriRequest $request)
    {
        // validasi data
        if ($request->validated()) {
            $slug = Str::slug($request->nama . '-');
            BlogKategori::create($request->validated() + ['slug' => $slug]);
        }

        // kembalikan ke halaman index dan tampilkan pesan berhasil
        return redirect()->route('blogkategori.index')->with([
            'message' => 'Success Created!',
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
    public function edit(BlogKategori $blogkategori)
    {
        // Kirim data blog_kategori ke view edit.blade.php
        return view('admin.blog_kategori.edit', compact('blogkategori'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BlogKategoriRequest $request, BlogKategori $blogkategori)
    {
        if ($request->validated()) {
            $slug = Str::slug($request->nama, '-');
            $blogkategori->update($request->validated() + ['slug' => $slug]);
        }
        // Redirect ke halaman lain atau tampilkan pesan sukses
        return redirect()->route('blogkategori.index')->with(
            ['success', 'kategori updated successfully!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(BlogKategori $blogkategori)
    {
      
        $blogkategori->delete();

        return redirect()->back()->with([
            'message' => 'Success Delete!',
            'alert-type' => 'danger'
        ]);
    }
}
