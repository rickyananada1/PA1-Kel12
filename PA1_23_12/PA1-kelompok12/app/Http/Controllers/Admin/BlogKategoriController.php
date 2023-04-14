<?php

namespace App\Http\Controllers\Admin;

use App\Models\BlogKategori;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\BlogKategoriRequest;

class BlogKategoriController extends Controller
{
    public function index()
    {
        $blogkategori = blogkategori::paginate(10);

        return view('admin.blogkategori.index', compact('blogkategori'));
    }

    public function create()
    {
        return view('admin.blogkategori.create');
    }

    public function store(BlogKategoriRequest $request)
    {
        if ($request->validated()) {
            $slug = Str::slug($request->nama, '-');
            blogkategori::create($request->validated() + ['slug' => $slug]);
        }

        return redirect()->route('blogkategori.index')->with([
            'message' => 'Success Created !',
            'alert-type' => 'success'
        ]);
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BlogKategori $category)
    {
        return view('blogkategori.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BlogKategoriRequest $request, BlogKategori $category)
    {
        if ($request->validated()) {
            $slug = Str::slug($request->nama, '-');
            $category->update($request->validated() + ['slug' => $slug]);
        }

        return redirect()->route('blogkategori.index')->with([
            'message' => 'Success Updated !',
            'alert-type' => 'info'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BlogKategori $category)
    {
        $category->delete();

        return redirect()->back()->with([
            'message' => 'Success Deleted !',
            'alert-type' => 'danger'
        ]);
    }
}
