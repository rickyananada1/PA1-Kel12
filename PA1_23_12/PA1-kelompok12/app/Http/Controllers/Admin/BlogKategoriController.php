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
        if($request->validated()) {
            $slug = Str::slug($request->nama, '-');
            blogkategori::create($request->validated() + ['slug' => $slug]);
        }

        
    }
}
