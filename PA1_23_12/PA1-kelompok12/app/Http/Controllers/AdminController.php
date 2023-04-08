<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin(Request $request)
    {
        return view('admin.master');
    }

    public function table(Request $request)
    {
        return view('admin.dashboard');
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
