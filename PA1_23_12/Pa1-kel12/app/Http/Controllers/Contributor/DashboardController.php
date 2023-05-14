<?php

namespace App\Http\Controllers\Contributor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DestinationCategory;
use App\Models\Destination;
use App\Models\BlogCategory;
use App\Models\Blog;
use App\Models\Kabupaten;
use App\Models\Restaurant;
use App\Models\User;

class DashboardController extends Controller
{
    public function dashboard()
    {
        // $nama_admin = User::all();

        $sumKabupaten  = Kabupaten::count();
        $sumDestination  = Destination::count();
        $sumBlog = Blog::count();
        $sumRestaurant = Restaurant::count();

        return view('contributor.dashboard', compact(
            'sumKabupaten',
            'sumBlog',
            'sumDestination',
            'sumRestaurant',
        ));
    }
}
