<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Jurusan;
use App\Models\Galery;
use App\Models\Extra;

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
        $data=Galery::all();
        return view('landingpage.galerry',compact('data'));
    }
    public function kontak(Request $request)
    {
        return view('landingpage.kontak');
    }
    public function visi(Request $request)
    {
        return view('landingpage.visi');
    }
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
        return view('landingpage.detailevents');}
    public function echo(Request $request)
    {
        return view('landingpage.echo');
    }
    public function blogdetail(Request $request)
    {
        return view('landingpage.blogdetail');
    }
    public function extrakulikuler(Request $request)
    {
        
        $data=Extra::all();

        return view('landingpage.extrakulikuler',compact('data'));
    }
    public function axio(Request $request)
    {
        return view('landingpage.axio');
    }
    public function silaras(Request $request)
    {
        return view('landingpage.silaras');
    }
    public function beasiswa(Request $request)
    {
        return view('landingpage.beasiswa');
    }
    public function bkk(Request $request)
    {
        return view('landingpage.bkk');
    }
    public function bkkdetail(Request $request)
    {
        return view('landingpage.bkkdetail');
    }
    public function programkeahlian(Request $request)
    {
        $data=Jurusan::all();
        return view('landingpage.jurusan.programkeahlian',compact('data'));
    }
}
