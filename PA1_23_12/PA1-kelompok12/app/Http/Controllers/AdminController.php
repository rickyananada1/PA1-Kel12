<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin(Request $request)
    {
        return view('layouts.master');
    }

    public function table(Request $request)
    {
        return view('layouts.backend.dashboard');
    }
    public function berita(Request $request)
    {
        return view('layouts.backend.berita');
    }
    public function kumpulanwisata(Request $request)
    {
        return view('layouts.backend.kumpulanwisata');
    }
}
