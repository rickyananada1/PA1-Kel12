<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogKategori;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Http\Requests\Admin\BlogRequest;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::with('BlogKategori')->paginate(5);

        return view('admin.blog.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategoris = BlogKategori::all();

        return view('admin.blog.create', compact('kategoris'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BlogRequest $request)
    {
        if ($request->validated()) {
            $gambar = $request->file('gambar')->store(
                // memasukkan gambar ke dalam public/storage/blog/gambar
                'blog/gambar',
                'public'
            );
            $slug = Str::slug($request->title, '-') . '-' . time();

            Blog::create($request->except('gambar') + ['slug' => $slug, 'gambar' => $gambar]);
        }
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
    public function edit(Blog $blog)
    {
        $kategoris = BlogKategori::get(['nama', 'id']);

        return view('admin.blog.edit', compact('blog', 'kategoris'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BlogRequest $request, Blog $blog)
    {
        if ($request->validated()) {
            $slug = Str::slug($request->judul, '-');
            if ($request->gambar) {
                File::delete('storage/' . $blog->gambar);
                $gambar = $request->file('gambar')->store(
                    'blog/gambar',
                    'public'
                );
                $blog->update($request->except('gambar') + ['slug' => $slug, 'gambar' => $gambar]);
            } else {
                $blog->update($request->validated() + ['slug' => $slug]);
            }
        }
        return redirect()->route('blogs.index')->with([
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
    public function destroy(Blog $blog)
    {
        File::delete('storage/' . $blog->gambar);
        $blog->delete();

        return redirect()->back()->with([
            'message' => 'Success Deleted !',
            'alert-type' => 'danger'
        ]);
    }
}
