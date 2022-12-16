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
use App\Models\Footer;
use App\Models\FooterLink;
use App\Models\Kajur;
use App\Models\Kategoriblog;
use App\Models\Sambutan;
use App\Models\Slider;
use App\Models\Patner;
use App\Models\Video;

class LandingController extends Controller
{
    public function index(){
        $data=Guru::all();
        $gakenek=blog::all();
        $sambutan=Sambutan::all();
        $about=About::all();
        $event = Event::all();
        $slider = Slider::all();
        $patner=Patner::all();
        $vidio=Video::all();
        // $data=sejarah
        return view('landingpage.index','footer', compact('data','gakenek', 'sambutan', 'about', 'event', 'slider', 'patner', 'vidio'));
    }

    public function footer(Request $request)
    {
        $data=FooterLink::all();
        $footer=Footer::all();
        return view('landingpage.layout.sija', compact('data', 'footer'));
    }

    public function sija(Request $request)
    {
        return view('landingpage.jurusan.footer');
    }

    public function detail($id)
    {
        $data=Jurusan::where('id',$id)->get();
        $kj=Kajur::with('jurusan');
        $kajur=Kajur::find($id);
        return view('landingpage.jurusan.detail',compact('data','kj','kajur'));
    }

    public function profile(Request $request)
    {
        $data = Profile::where('id','=',1)->firstOrFail();
        $visi = visi::where('id','=',1)->firstOrFail();
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
        $blog=blog::with('kategori');
        $data=blog::all();
        $datakategori=Kategoriblog::all();
        return view('landingpage.blog', compact('blog', 'data',  'datakategori'));
    }
    public function events(Request $request)
    {
        $data = Event::all();
        return view('landingpage.events', compact('data'));
    }
    public function detailevents($id)
    {
        $data=Event::where('id',$id)->get();
        return view('landingpage.detailevents', compact('data'));
    }

    public function echo(Request $request)
    {
        $data = sudutecho::where('id','=',1)->firstOrFail();
        return view('landingpage.echo', compact('data'));
    }
    public function blogdetail($id)
    {
        $data=blog::where('id',$id)->get();
        $kategori=Kategoriblog::all();
        $blog=blog::latest()->get();
        return view('landingpage.blogdetail', compact('data', 'kategori', 'blog'));
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
    public function bkkdetail($id)
    {
        $data=Bkk::where('id',$id)->get();
        return view('landingpage.bkkdetail', compact('data'));
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
