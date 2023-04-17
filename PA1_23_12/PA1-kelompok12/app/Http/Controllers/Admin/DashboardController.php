<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DestinasiKategori;
use App\Models\Destinasi;
use App\Models\BlogKategori;
use App\Models\Blog;
use App\Models\User;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $nama_admin = User::all();

        $total_destinasiKategori  = DestinasiKategori::count();
        $total_destinasi  = Destinasi::count();
        $total_blogKategori = BlogKategori::count();
        // $total_blog = Blog::count();

        return view('admin.dashboard', compact(
            'nama_admin',
            'total_destinasiKategori',
            'total_destinasi',
            'total_blogKategori',
            // 'total_blog',
        ));
    }
}
