<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\Destination;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::with('galleries')
            ->where('is_share', 1)
            ->orderBy('created_at', 'desc')
            ->paginate(5);

        $latestBlogs = Blog::where('is_share', 1)
            ->orderBy('created_at', 'desc')
            ->paginate(7);
        
        $destinations = Destination::where('is_share', 1)
        ->paginate(7);

        return view('front.blog.index', compact('blogs', 'latestBlogs', 'destinations'));
    }

    public function show(Blog $blog)
    {
        $blogs = Blog::where('id', '!=', $blog->id)->get();
        $categories = BlogCategory::all();


        return view('front.blog.show', compact('blog', 'blogs', 'categories'));
    }

    public function sidebar(Blog $blog)
    {
        // $blogs = Blog::where('id', '!=', $blog->id)->get();


        return view('front.blog.sidebar', compact('latestBlogs'));
    }
}
