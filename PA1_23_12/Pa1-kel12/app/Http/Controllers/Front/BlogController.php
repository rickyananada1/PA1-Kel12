<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\BlogCategory;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::with('galleries')
            ->where('is_share', 1)
            ->orderBy('created_at', 'desc')
            ->paginate(5);

        return view('front.blog.index', compact('blogs'));
    }

    public function show(Blog $blog)
    {
        $blogs = Blog::where('id', '!=', $blog->id)->get();
        $categories = BlogCategory::all();

        return view('front.blog.show', compact('blog', 'blogs', 'categories'));
    }
}
