<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use App\Http\Requests\Admin\BlogRequest;
use App\Models\BlogGallery;
use App\Models\Kabupaten;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::with('BlogCategory')->paginate(10);

        return view('admin.blog.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = BlogCategory::all();
        $kabupatens = Kabupaten::all();
        return view('admin.blog.create', compact('categories', 'kabupatens'));
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
            $slug = Str::slug($request->title, '-') . '-' . time();
            $blog = Blog::create($request->validated() + ['slug' => $slug]);
        }

        return redirect()->route('blog.edit', [$blog])->with([
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
    public function edit(Blog $blog)
    {
        $kabupatens = Kabupaten::all();
        $categories = BlogCategory::get(['name', 'id']);
        $blogGalleries = BlogGallery::paginate(10);

        return view('admin.blog.edit', compact('blog', 'categories', 'blogGalleries', 'kabupatens'));
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
            $slug = Str::slug($request->title, '-');
            $blog->update($request->validated() + ['slug' => $slug]);
        }
        return redirect()->route('blog.index')->with([
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
        $blog->delete();

        return redirect()->back()->with([
            'message' => 'Success Deleted !',
            'alert-type' => 'danger'
        ]);
    }
}
