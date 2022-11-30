<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(Request $request)
    {
        return view('admin.beranda');
    }
    public function siswapres(Request $request)
    {
        return view('admin.siswapres');
    }
}
