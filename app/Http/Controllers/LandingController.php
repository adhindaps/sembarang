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
use App\Models\Prestasi;
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
use App\Models\Silaras;
use App\Models\Video;

class LandingController extends Controller
{
    public function index(){
        $data=Guru::all();
        $gakenek=blog::all();
        $sambutan=Sambutan::all();
        $about=About::all();
        $event = Event::latest()->limit(4)->get();
        $slider = Slider::all();
        $patner=Patner::all();
        $vidio=Video::all();
        $footerlink=FooterLink::all();
        $footer=Footer::all();
        // $data=sejarah
        return view('landingpage.index', compact('data','gakenek', 'sambutan', 'about', 'event', 'slider', 'patner', 'vidio', 'footer', 'footerlink'));
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
        $footerlink=FooterLink::all();
        $footer=Footer::all();
        return view('landingpage.jurusan.detail',compact('data','kj','kajur', 'footer', 'footerlink'));
    }

    public function profile(Request $request)
    {
        $data = Profile::where('id','=',1)->firstOrFail();
        $visi = visi::where('id','=',1)->firstOrFail();
        $footerlink=FooterLink::all();
        $footer=Footer::all();
        return view('landingpage.profile', compact('data', 'visi', 'footer', 'footerlink'));
        
    }
    
    public function galerry(Request $request)
    {
        $data=Galery::all();
        $footerlink=FooterLink::all();
        $footer=Footer::all();
        return view('landingpage.galerry',compact('data', 'footer', 'footerlink'));
    }

    public function kontak(Request $request)
    {
        $footerlink=FooterLink::all();
        $footer=Footer::all();
        return view('landingpage.kontak', compact('footer', 'footerlink'));
    }

    public function dataguru(Request $request)
    {
        $footerlink=FooterLink::all();
        $footer=Footer::all();
        $data=Guru::all();
        return view('landingpage.dataguru',compact('data', 'footer', 'footerlink'));
    }
    public function blog(Request $request)
    {
        $blog=blog::with('kategori');
        $data=blog::all();
        $datakategori=Kategoriblog::all();
        $footerlink=FooterLink::all();
        $footer=Footer::all();
        return view('landingpage.blog', compact('blog', 'data',  'datakategori', 'footer', 'footerlink'));
    }
    public function events(Request $request)
    {
        $data = Event::all();
        $footerlink=FooterLink::all();
        $footer=Footer::all();
        return view('landingpage.events', compact('data', 'footer', 'footerlink'));
    }
    public function detailevents($id)
    {
        $agenda=Event::latest()->limit(5)->get();
        $data=Event::where('id',$id)->get();
        $footerlink=FooterLink::all();
        $footer=Footer::all();
        return view('landingpage.detailevents', compact('data', 'agenda', 'footer', 'footerlink'));
    }

    public function echo(Request $request)
    {
        $footerlink=FooterLink::all();
        $footer=Footer::all();
        $data = sudutecho::where('id','=',1)->firstOrFail();
        return view('landingpage.echo', compact('data', 'footer', 'footerlink'));
    }
    public function blogdetail($id)
    {
        $data=blog::where('id',$id)->get();
        $kategori=Kategoriblog::all();
        $blog=blog::latest()->limit(5)->get();
        $footerlink=FooterLink::all();
        $footer=Footer::all();
        return view('landingpage.blogdetail', compact('data', 'kategori', 'blog', 'footer', 'footerlink'));
    }
    public function extrakulikuler(Request $request)
    {
        
        $data=Extra::all();
        $footerlink=FooterLink::all();
        $footer=Footer::all();
        return view('landingpage.extrakulikuler',compact('data', 'footer', 'footerlink'));
    }
    public function axio(Request $request)
    {
        $data = Axio::where('id','=',1)->firstOrFail();
        $footerlink=FooterLink::all();
        $footer=Footer::all();
        return view('landingpage.axio', compact('data', 'footer', 'footerlink'));
    }
    public function silaras(Request $request)
    {
        $data=Silaras::all();
        $footerlink=FooterLink::all();
        $footer=Footer::all();
        return view('landingpage.silaras', compact('footer', 'footerlink'));
    }
    public function beasiswa(Request $request)
    {
        $data = Beasiswa::all();
        $footerlink=FooterLink::all();
        $footer=Footer::all();
        return view('landingpage.beasiswa',compact('data', 'footer', 'footerlink'));
    }
    public function bkk(Request $request)
    {
        $data=Bkk::all();
        $footerlink=FooterLink::all();
        $footer=Footer::all();
        return view('landingpage.bkk',compact('data', 'footer', 'footerlink'));
    }
    public function bkkdetail($id)
    {
        $data=Bkk::where('id',$id)->get();
        $footerlink=FooterLink::all();
        $footer=Footer::all();
        return view('landingpage.bkkdetail', compact('data', 'footer', 'footerlink'));
    }
    public function programkeahlian(Request $request)
    {
        $data=Jurusan::all();
        $footerlink=FooterLink::all();
        $footer=Footer::all();
        return view('landingpage.jurusan.programkeahlian',compact('data', 'footer', 'footerlink'));
    }
    public function sejarah(Request $request)
    {
        $data = Sejarah::where('id','=',1)->firstOrFail();
        $blog=blog::latest()->limit(5)->get();
        $footerlink=FooterLink::all();
        $footer=Footer::all();
        return view('landingpage.sejarah',compact('data', 'blog', 'footer', 'footerlink'));
    }
    public function prestasi(Request $request)
    {
        $data= Prestasi::all();
        return view('landingpage.prestasi',compact('data'));
    }
    public function prestasidetail($id)
    {
        $data= Prestasi::where('id',$id)->get();
        return view('landingpage.prestasidetail',compact('data'));
    }
}
