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
use App\Models\GaleriAxio;
use App\Models\GaleriEcho;
use App\Models\Jabatan;
use App\Models\Subjabatan;
use App\Models\Kajur;
use App\Models\Kategoriblog;
use App\Models\Sambutan;
use App\Models\Slider;
use App\Models\Patner;
use App\Models\Silaras;
use App\Models\Sosmed;
use App\Models\Status;
use App\Models\Video;

class LandingController extends Controller
{
    public function index(){
        $data=Guru::all();
        $jabatan=Guru::with( 'subjabatan');
        $status=Subjabatan::all();
        $gakenek=blog::all();
        $sambutan=Sambutan::all();
        $about=About::all();
        $event = Event::latest()->limit(4)->get();
        $slider = Slider::all();
        $patner=Patner::all();
        $vidio=Video::all();
        $footerlink=FooterLink::all();
        $footer=Footer::all();
        $sosmed=Sosmed::all();
        $email=Profile::all();
        // $data=sejarah
        return view('landingpage.index', compact('data','jabatan', 'status', 'gakenek', 'sambutan', 'about', 'event', 'slider', 'patner', 'vidio', 'footer', 'footerlink', 'sosmed', 'email'));
    }

    public function header(Request $request)
    {
        $sosmed=Sosmed::all();
        $email=Profile::all();
        return view('landingpage.layout.header', compact('sosmed', 'email'));
    }

    public function footer(Request $request)
    {
        $data=FooterLink::all();
        $footer=Footer::all();
        return view('landingpage.layout.footer', compact('data', 'footer'));
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
        $sosmed=Sosmed::all();
        $email=Profile::all();
        $guru=Guru::with('subjabatan')->where('subjabatan_id','=',$id)->get();
        return view('landingpage.jurusan.detail',compact('data','kj','kajur', 'footer', 'footerlink', 'sosmed', 'email','guru'));
    }

    public function profile(Request $request)
    {
        $data = Profile::where('id','=',1)->firstOrFail();
        $visi = visi::all();
        $visi = Visi::all();
        $footerlink=FooterLink::all();
        $footer=Footer::all();
        $sosmed=Sosmed::all();
        $email=Profile::all();
        $kepalasekolah=Guru::with('subjabatan')->where('jabatan_id','=',2)->firstOrFail();
        $foto=Guru::with('subjabatan')->where('jabatan_id','=',1)->get();
        return view('landingpage.profile', compact('data', 'visi', 'footer', 'footerlink', 'sosmed', 'email', 'foto','kepalasekolah'));
        
    }
    
    public function galerry(Request $request)
    {
        $data=Galery::paginate(12);
        $footerlink=FooterLink::all();
        $footer=Footer::all();
        $sosmed=Sosmed::all();
        $email=Profile::all();
        return view('landingpage.galerry',compact('data', 'footer', 'footerlink', 'sosmed', 'email'));
    }

    public function kontak(Request $request)
    {
        $footerlink=FooterLink::all();
        $footer=Footer::all();
        $sosmed=Sosmed::all();
        $email=Profile::all();
        return view('landingpage.kontak', compact('footer', 'footerlink', 'sosmed', 'email'));
    }

    public function dataguru(Request $request)
    {
        $footerlink=FooterLink::all();
        $footer=Footer::all();
        $data=Guru::all();
        $jabatan=Guru::with('jabatan', 'status', 'subjabatan');
      
        $status=Status::all();
        // $subjabatan=Guru::with('subjabatan');
        $sosmed=Sosmed::all();
        $email=Profile::all();
        return view('landingpage.dataguru',compact('data', 'footer', 'footerlink', 'jabatan', 'status',  'sosmed', 'email'));
    }
    public function blog(Request $request)
    {
        $blog=blog::with('kategori');
        $data=blog::paginate(12);
        $datakategori=Kategoriblog::all();
        $footerlink=FooterLink::all();
        $footer=Footer::all();
        $sosmed=Sosmed::all();
        $email=Profile::all();
        return view('landingpage.blog', compact('blog', 'data',  'datakategori', 'footer', 'footerlink', 'sosmed', 'email'));
    }
    public function events(Request $request)
    {
        $data = Event::paginate(12);
        $footerlink=FooterLink::all();
        $footer=Footer::all();
        $sosmed=Sosmed::all();
        $email=Profile::all();
        return view('landingpage.events', compact('data', 'footer', 'footerlink', 'sosmed', 'email'));
    }
    public function detailevents($id)
    {
        $agenda=Event::latest()->limit(5)->get();
        $data=Event::where('id',$id)->get();
        $footerlink=FooterLink::all();
        $footer=Footer::all();
        $sosmed=Sosmed::all();
        $email=Profile::all();
        return view('landingpage.detailevents', compact('data', 'agenda', 'footer', 'footerlink', 'sosmed', 'email'));
    }

    public function echo(Request $request)
    {
        $footerlink=FooterLink::all();
        $footer=Footer::all();
        $data = sudutecho::where('id','=',1)->firstOrFail();
        $galerieco = GaleriEcho::all();
        $sosmed=Sosmed::all();
        $email=Profile::all();
        return view('landingpage.echo', compact('data', 'footer', 'footerlink', 'galerieco', 'sosmed', 'email'));
    }
    public function blogdetail($id)
    {
        $data=blog::where('id',$id)->get();
        $opo=blog::with('kategori');
        $datakategori=Kategoriblog::all();
        $blog=blog::latest()->limit(5)->get();
        $footerlink=FooterLink::all();
        $footer=Footer::all();
        $sosmed=Sosmed::all();
        $email=Profile::all();
        return view('landingpage.blogdetail', compact('data','opo', 'datakategori', 'blog', 'footer', 'footerlink', 'sosmed', 'email'));
    }
    public function extrakulikuler(Request $request)
    {
        
        $data=Extra::all();
        $footerlink=FooterLink::all();
        $footer=Footer::all();
        $sosmed=Sosmed::all();
        $email=Profile::all();
        return view('landingpage.extrakulikuler',compact('data', 'footer', 'footerlink', 'sosmed', 'email'));
    }
    public function axio(Request $request)
    {
        $data = Axio::where('id','=',1)->firstOrFail();
        $fotoaxio = GaleriAxio::latest()->limit(9)->get();
        $footerlink=FooterLink::all();
        $footer=Footer::all();
        $sosmed=Sosmed::all();
        $email=Profile::all();
        return view('landingpage.axio', compact('data', 'fotoaxio', 'footer', 'footerlink', 'sosmed', 'email' ));
    }
    public function silaras(Request $request)
    {
        $data=Silaras::where('id','=',1)->firstOrFail();
        $agenda=Event::latest()->limit(4)->get();
        $blog=blog::latest()->limit(4)->get();
        $foto=Galery::latest()->limit(6)->get();
        $footerlink=FooterLink::all();
        $footer=Footer::all();
        $sosmed=Sosmed::all();
        $email=Profile::all();
        return view('landingpage.silaras', compact('footer', 'footerlink','blog','data','foto','agenda', 'sosmed', 'email'));
    }
    public function beasiswa(Request $request)
    {
        $data = Beasiswa::all();
        $blog=blog::latest()->limit(5)->get();
        $foto=Galery::latest()->limit(6)->get();
        $footerlink=FooterLink::all();
        $footer=Footer::all();
        $sosmed=Sosmed::all();
        $email=Profile::all();
        return view('landingpage.beasiswa',compact('data', 'footer', 'footerlink','blog','foto', 'sosmed', 'email'));
    }
    public function bkk(Request $request)
    {
        $data=Bkk::all();
        $data=Bkk::paginate(12);
        $footerlink=FooterLink::all();
        $footer=Footer::all();
        $sosmed=Sosmed::all();
        $email=Profile::all();
        return view('landingpage.bkk',compact('data', 'footer', 'footerlink', 'sosmed', 'email'));
    }
    public function bkkdetail($id)
    {
        $data=Bkk::where('id',$id)->get();
        $footerlink=FooterLink::all();
        $footer=Footer::all();
        $sosmed=Sosmed::all();
        $email=Profile::all();
        $lowongan=Bkk::latest()->limit(6)->get();
        $perusahaan=Bkk::where('id',$id)->get();
        return view('landingpage.bkkdetail', compact('data', 'footer', 'footerlink', 'sosmed', 'email', 'lowongan', 'perusahaan'));
    }
    public function programkeahlian(Request $request)
    {
        $data=Jurusan::all();
        $footerlink=FooterLink::all();
        $footer=Footer::all();
        $sosmed=Sosmed::all();
        $email=Profile::all();
        return view('landingpage.jurusan.programkeahlian',compact('data', 'footer', 'footerlink', 'sosmed', 'email'));
    }
    public function sejarah(Request $request)
    {
        $data = Sejarah::where('id','=',1)->firstOrFail();
        $blog=blog::latest()->limit(5)->get();
        $foto=Galery::latest()->limit(6)->get();
        $footerlink=FooterLink::all();
        $footer=Footer::all();
        $sosmed=Sosmed::all();
        $email=Profile::all();
        return view('landingpage.sejarah',compact('data', 'blog', 'footer', 'footerlink','foto', 'sosmed', 'email'));
    }
    public function prestasi(Request $request)
    {
        $data= Prestasi::paginate(12);
        $footerlink=FooterLink::all();
        $footer=Footer::all();
        $sosmed=Sosmed::all();
        $email=Profile::all();
        return view('landingpage.prestasi',compact('data', 'footer', 'footerlink', 'sosmed', 'email'));
    }
    public function prestasidetail($id)
    {
        $data= Prestasi::where('id',$id)->get();
        $footerlink=FooterLink::all();
        $footer=Footer::all();
        $agenda=blog::latest()->limit(5)->get();
        $sosmed=Sosmed::all();
        $email=Profile::all();
        return view('landingpage.prestasidetail',compact('data', 'footer', 'footerlink', 'agenda', 'sosmed', 'email'));
    }
}
