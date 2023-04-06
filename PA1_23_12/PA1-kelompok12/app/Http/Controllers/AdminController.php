<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin(Request $request)
    {
        return view('layout.master');
    }
    
    public function table(Request $request)
    {
        return view('layout.backend.dashboard');
    }
    public function berita(Request $request)
    {
        return view('layout.backend.berita');
    }
    public function kumpulanwisata(Request $request)
    {
        return view('layout.backend.kumpulanwisata');
    }
}
