<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DestinasiKategori;
use App\Models\BlogKategori;

class AdminController extends Controller
{
    public function admin(Request $request)
    {
        return view('admin.master');
    }

    public function table(Request $request)
    {
        $jumlahDestinasiKategori = DestinasiKategori::count();
        $jumlahBlogKategori = BlogKategori::count();

        return view('admin.dashboard', compact('jumlahDestinasiKategori','jumlahBlogKategori'));
    }
    public function listblog(Request $request)
    {
        return view('admin.listblog');
    }
    public function listwisata(Request $request)
    {
        return view('admin.listwisata');
    }
}
