<?php

namespace App\Http\Controllers;

use App\Models\blog;
use Illuminate\Http\Request;
use App\Models\Jurusan;
use App\Models\Galery;
use App\Models\Extra;
use App\Models\Guru;
use App\Models\Profile;
use App\Models\Sejarah;
use App\Models\visi;

class LandingController extends Controller
{
    public function index(){
        $data=Guru::all();
        // $data=sejarah
        return view('landingpage.index', compact('data'));
    }
    public function sija(Request $request)
    {
        return view('landingpage.jurusan.sija');
    }

    public function tb(Request $request)
    {
        return view('landingpage.jurusan.tb');
    }

    public function profile(Request $request)
    {
        $data = Profile::where('id','=',1)->firstOrFail();
        return view('landingpage.profile', compact('data'));
        
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
        $data=Guru::all();
        return view('landingpage.dataguru',compact('data'));
    }
    public function blog(Request $request)
    {
        $data=blog::all();
        return view('landingpage.blog', compact(['data']));
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
    public function sejarah(Request $request)
    {
        $data = Sejarah::where('id','=',1)->firstOrFail();
        return view('landingpage.sejarah',compact('data'));
    }
}
