<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\Contributor;
use App\Models\Destination;

class BlogController extends Controller
{
    public function index(Request $request)
    {

        $selectedCategory = $request->input('category');

        if ($selectedCategory) {
            $blogs = Blog::with('galleries')
                ->where('blog_category_id', $selectedCategory)
                ->where('is_share', 1)
                ->paginate(5);
        } else {
            $blogs = Blog::with('galleries')
                ->where('is_share', 1)
                ->paginate(5);
        }

        $latestBlogs = Blog::where('is_share', 1)
            ->orderBy('created_at', 'desc')
            ->get();

        $popularBlogs = Blog::with('galleries')
            ->where('is_share', 1)
            ->orderBy('views', 'desc') // Order by views in descending order
            ->get();

        $destinations = Destination::where('is_share', 1)
            ->get();

        $blogCategories = BlogCategory::all();

        return view('front.blog.index', compact('blogs', 'latestBlogs', 'destinations', 'popularBlogs', 'blogCategories', 'selectedCategory'));
    }

    public function show(Blog $blog)
    {
        $latestBlogs = Blog::where('is_share', 1)
            ->orderBy('created_at', 'desc')
            ->paginate(7);

        $popularBlogs = Blog::with('galleries')
            ->where('is_share', 1)
            ->orderBy('views', 'desc') // Order by views in descending order
            ->paginate(7);

        $destinations = Destination::where('is_share', 1)
            ->paginate(7);

        $blogCategories = BlogCategory::all();

        $blog->increment('views');


        return view('front.blog.show', compact('blog', 'latestBlogs', 'destinations', 'popularBlogs', 'blogCategories'));
    }
}
