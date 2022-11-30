<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\blog;
use Illuminate\Http\Request;
use App\Models\Jurusan;
use App\Models\Galery;
use App\Models\Extra;
use App\Models\Guru;
use App\Models\Profile;
use App\Models\Sejarah;
use App\Models\visi;
use App\Models\sudutecho;
use App\Models\Axio;
use App\Models\Beasiswa;
use App\Models\Bkk;
use App\Models\Event;
use App\Models\Kajur;
use App\Models\Sambutan;

class LandingController extends Controller
{
    public function index(){
        $data=Guru::all();
        $gakenek=blog::all();
        $sambutan=Sambutan::all();
        $about=About::all();
        $event = Event::all();
        // $data=sejarah
        return view('landingpage.index', compact('data','gakenek', 'sambutan', 'about', 'event'));
    }

    public function sija(Request $request)
    {
        return view('landingpage.jurusan.sija');
    }

    public function detail($id)
    {
        $data=Jurusan::find($id);
        $kj=Kajur::with('jurusan');
        $kajur=Kajur::find($id);
        return view('landingpage.jurusan.detail',compact('data','kajur', 'kj'));
    }

    public function profile(Request $request)
    {
        $data = Profile::where('id','=',1)->firstOrFail();
        $visi = Visi::where('id','=',1)->firstOrFail();
        return view('landingpage.profile', compact('data', 'visi'));
        
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
        $data = Event::all();
        return view('landingpage.events', compact('data'));
    }
    public function detailevents($id)
    {
        $data=Event::find($id);
        return view('landingpage.detailevents', compact('data'));
    }

    public function echo(Request $request)
    {
        $data = sudutecho::where('id','=',1)->firstOrFail();
        return view('landingpage.echo', compact('data'));
    }
    public function blogdetail(Request $request)
    {
        $data=blog::all();
        return view('landingpage.blogdetail', compact(['data']));
    }
    public function extrakulikuler(Request $request)
    {
        
        $data=Extra::all();

        return view('landingpage.extrakulikuler',compact('data'));
    }
    public function axio(Request $request)
    {
        $data = Axio::where('id','=',1)->firstOrFail();
        return view('landingpage.axio', compact('data'));
    }
    public function silaras(Request $request)
    {
        return view('landingpage.silaras');
    }
    public function beasiswa(Request $request)
    {
        $data = Beasiswa::where('id','=',1)->firstOrFail();
        return view('landingpage.beasiswa',compact('data'));
    }
    public function bkk(Request $request)
    {
        $data=Bkk::all();
        return view('landingpage.bkk',compact('data'));
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
