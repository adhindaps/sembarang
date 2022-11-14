<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function anm(Request $request)
    {
        return view('landingpage.jurusan.anm');
    }
    public function aph(Request $request)
    {
        return view('landingpage.jurusan.aph');
    }
    public function rpl(Request $request)
    {
        return view('landingpage.jurusan.rpl');
    }
    public function mm(Request $request)
    {
        return view('landingpage.jurusan.mm');
    }
    public function sija(Request $request)
    {
        return view('landingpage.jurusan.sija');
    }
    public function tb(Request $request)
    {
        return view('landingpage.jurusan.tb');
    }
    public function tkj(Request $request)
    {
        return view('landingpage.jurusan.tkj');
    }
    public function sejarah(Request $request)
    {
        return view('landingpage.sejarah');
    }
    public function profile(Request $request)
    {
        return view('landingpage.profile');
    }
    public function galerry(Request $request)
    {
        return view('landingpage.galerry');
    }
    public function kontak(Request $request)
    {
        return view('landingpage.kontak');
    }
    public function visi(Request $request)
    {
        return view('landingpage.visi');
    }
<<<<<<< Updated upstream:app/Http/Controllers/LandingController.php
    public function dataguru(Request $request)
    {
        return view('landingpage.dataguru');
    }
    public function blog(Request $request)
    {
        return view('landingpage.blog');
    }
    public function events(Request $request)
    {
        return view('landingpage.events');
    }
    public function detailevents(Request $request)
    {
        return view('landingpage.detailevents');
=======
    public function echo(Request $request)
    {
        return view('landingpage.echo');
    }
    public function blogdetail(Request $request)
    {
        return view('landingpage.blogdetail');
>>>>>>> Stashed changes:app/Http/Controllers/LandingsController.php
    }
}
