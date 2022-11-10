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
    public function galerry(Request $request)
    {
        return view('landingpage.galerry');
    }
    public function kontak(Request $request)
    {
        return view('landingpage.kontak');
    }
}
