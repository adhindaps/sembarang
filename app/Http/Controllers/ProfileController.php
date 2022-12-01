<?php

namespace App\Http\Controllers;


use App\Models\about;
use App\Models\Sambutan;
use App\Models\sudutecho;
use App\Models\Profile;
use App\Models\blog;
use App\Models\Event;
use App\Models\Slider;
use App\Models\visi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function identitas($id)
    {
        // $visi = Visi::where('id',$id)->get();
        $data = Profile::where('id','=',1)->firstOrFail();
        return view('admin.profile.identitas', compact('data', 'visi'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'status' => 'required',
            'NPNS' => 'required',
            'akreditasi' => 'required',
            'NSS' => 'required',
            'alamat' => 'required',
            'kode' => 'required',
            'no' => 'required',
            'email' => 'required',
        ]);
        $data = Profile::create([
            'nama' => $request->nama,
            'status' => $request->status,
            'NPNS' => $request->NPNS,
            'akreditasi' => $request->akreditasi,
            'NSS' => $request->NSS,
            'alamat' => $request->alamat,
            'kode' => $request->kode,
            'no' => $request->no,
            'email' => $request->email,
        ]);
        return redirect()->route('identitas')->with('success', 'Data Berhasil Di Tambahkan');
    
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function updateprofile(Request $request, Profile $profile)
    {
        $data=Profile::find($request->id);
        $data->update($request->all());
        return redirect('identitas');
    }

     public function blogindex()
    {
        $data=blog::all();
        return view('admin.blogindex', compact(['data']));
    }

    public function blogcreate()
    {
        
        return view('admin.blogcreat');
    }

    public function blogstore(Request $request)
    {
        if($request->hasFile('foto')){
            $request->file('foto')->move('foto/', $request->file('foto')->getClientOriginalName());
        $data = blog::create([
            'foto' => $request->file('foto')->getClientOriginalName(),
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'kategori' => $request->kategori,
        ]);
        $data->foto = $request->file('foto')->getClientOriginalName();
    }
        return redirect()->route('blogindex')->with('success', 'Data Berhasil Di Tambahkan');
    }

    public function blogedit($id)
    {
        $data = blog::find($id);
        $data = blog::findOrfail($id);
        return view('admin.blogedit',compact('data'));
    }

    public function blogupdate($id, Request $request, Profile $blog)
    {
        $data = DB::table('blogs')->where('id',$id);
        if($request->hasFile('foto')){
            $pindah = $request->file('foto')->move(public_path().'\storage', $request->file('foto')->getClientOriginalName());
            $data = blog::find($id)->update([
                'foto' => $request->file('foto')->getClientOriginalName(),
               'judul' => $request->judul,
               'deskripsi' => $request->deskripsi,
              
            ]);
        return redirect('blogindex')->with('sukses','Updatedata!');
    }else{
        $data->update([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
        ]);
        return redirect('blogindex')->with('sukses','Updatedata!');
    }
    }

    public function deleteblog($id){
        $data = blog::find($id);
        $data->delete();
        return redirect()->route('blogindex')->with('sukses','Deletedata!');

    }

    public function index()
    {
        $data = Event::all();
        return view('admin.sekolah.eventindex', compact('data'));
    }
    
    public function create()
    {
        
        return view('admin.sekolah.eventscreate');
    }

    public function eventstore(Request $request)
    {
        if($request->hasFile('foto')){
            $request->file('foto')->move('foto/', $request->file('foto')->getClientOriginalName());
        $data = Event::create([
            'foto' => $request->file('foto')->getClientOriginalName(),
            'namaevent' => $request->namaevent,
            'tempat' => $request->tempat,
            'tanggalevent' => $request->tanggalevent,
            'jamevent' => $request->jamevent,
            'deskripsi' => $request->deskripsi,
        ]);
        $data->foto = $request->file('foto')->getClientOriginalName();
    }
        return redirect()->route('eventindex')->with('success', 'Data Berhasil Di Tambahkan');
    }

    public function eventedit($id)
    {
        $row = Event::find($id);
        $row = Event::findOrfail($id);
        return view('admin.sekolah.eventedit',compact('row'));
    }

    public function eventupdate($id, Request $request, Profile $event)
    {
        $data = DB::table('events')->where('id',$id);
        if($request->hasFile('foto')){
            $pindah = $request->file('foto')->move(public_path().'\storage', $request->file('foto')->getClientOriginalName());
            $data = Event::find($id)->update([
                'foto' => $request->file('foto')->getClientOriginalName(),
                'namaevent' => $request->namaevent,
                'tempat' => $request->tempat,
                'tanggalevent' => $request->tanggalevent,
                'jamevent' => $request->jamevent,
                'deskripsi' => $request->deskripsi,
              
            ]);
        return redirect('eventindex')->with('sukses','Updatedata!');
    }else{
        $data->update([
            'namaevent' => $request->namaevent,
            'tempat' => $request->tempat,
            'tanggalevent' => $request->tanggalevent,
            'jamevent' => $request->jamevent,
            'deskripsi' => $request->deskripsi,
        ]);
        return redirect('eventindex')->with('sukses','Updatedata!');
    }
    }

    public function deleteevent($id){
        $data = Event::find($id);
        $data->delete();
        return redirect()->route('eventindex')->with('sukses','Deletedata!');
    }
    
    public function echoindex()
    {
        $data = sudutecho::where('id','=',1)->firstOrFail();
        return view('admin.fasilitas.echoindex',compact('data'));
    }

    public function echostore(Request $request)
    {
        $this->validate($request, [
            'fotoecho' => 'required',
            'judul' => 'required',
            'deskripsi' => 'required',
        ]);
        $data = sudutecho::create([
            'fotoecho' => $request->fotoecho,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
        ]);
        return redirect('echoindex');
    
    }

    public function echoupdate(Request $request)
    {
        $data=sudutecho::find($request->id);
        $data->update($request->all());
        return redirect('echoindex');
    }
    
    public function smbtnindex()
    {
        $data = Sambutan::where('id','=',1)->firstOrFail();
        return view('admin.profile.sambutan',compact('data'));
    }

    public function smbtnstore(Request $request)
    {
        $this->validate($request, [
            'judul' => 'required',
            'sambutan' => 'required',
        ]);
        $data = sudutecho::create([
            'judul' => $request->judul,
            'sambutan' => $request->sambutan,
        ]);
        return redirect('smbtnindex');
    
    }

    public function smbtnupdate(Request $request)
    {
        $data=Sambutan::find($request->id);
        $data->update($request->all());
        return redirect('smbtnindex');
    }

    
    
    public function aboutindex()
    {
        // $data = About::where('id','=',1)->firstOrFail();
        // $data=About::all();
        $data=about::all();
        return view('admin.profile.aboutindex',compact('data'));
    }

    public function aboutedit($id)
    {
        $data = About::find($id);
        $data = About::findOrfail($id);
        return view('admin.profile.aboutedit',compact('data'));
    }

    public function aboutstore(Request $request)
    {
        $this->validate($request, [
            'icon' => 'required',
            'judul' => 'required',
            'deskripsi' => 'required',
        ]);
        $data = About::create([
            'icon' => $request->icon,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
        ]);
        return redirect('aboutindex');
    
    }

    public function aboutupdate(Request $request)
    {
        $data=About::find($request->id);
        $data->update($request->all());
        return redirect('aboutindex');
    }

  
    public function slider()
    {
        $data = Slider::all();
        return view('admin.slider', compact('data'));
    }

    public function slidercreate()
    {
        
        return view('admin.slidercreate');
    }

    public function sliderstore(Request $request)
    {
        if($request->hasFile('foto')){
            $request->file('foto')->move('foto/', $request->file('foto')->getClientOriginalName());
        $data = Slider::create([
            'foto' => $request->file('foto')->getClientOriginalName(),
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
        ]);
        $data->foto = $request->file('foto')->getClientOriginalName();
    }
        return redirect()->route('slider')->with('success', 'Data Berhasil Di Tambahkan');
    }

    public function slideredit($id)
    {
        $data = Slider::find($id);
        $data = Slider::findOrfail($id);
        return view('admin.slideredit',compact('data'));
    }

    public function destroy($id)
    {
        $data = Slider::find($id);
        $data->delete();
        return redirect()->route('slider')->with('success', 'Data Berhasil Dihapus');
    
    }
}
