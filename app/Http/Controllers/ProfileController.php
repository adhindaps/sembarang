<?php

namespace App\Http\Controllers;


use App\Models\about;
use App\Models\Sambutan;
use App\Models\sudutecho;
use App\Models\Profile;
use App\Models\blog;
use App\Models\Kategoriblog;
use App\Models\Event;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function identitas(Request $request)
    {
        $data = Profile::where('id','=',1)->firstOrFail();
        return view('admin.profile.identitas', compact('data'));
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
        return view('admin.blog.blogindex', compact('data'));
    }

    public function blogcreate()
    {
        $data=blog::all();
        $datakategori=Kategoriblog::all();
        return view('admin.blog.blogcreat',compact('data','datakategori'));
    }

    public function blogstore(Request $request)
    {
        if($request->hasFile('foto')){
            $request->file('foto')->move('blog/', $request->file('foto')->getClientOriginalName());
        $data = blog::create([
            'foto' => $request->file('foto')->getClientOriginalName(),
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'id_kategori' => $request->id_kategori,
        ]);
        $data->foto = $request->file('foto')->getClientOriginalName();
    }
        return redirect()->route('blogindex')->with('success', 'Data Berhasil Di Tambahkan');
    }

    public function blogedit($id)
    {
        $data = blog::findOrfail($id);
        $datakategori=Kategoriblog::all();
        return view('admin.blog.blogedit',compact('data','datakategori'));
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
               'id_kategori' => $request->id_kategori,
            ]);
        return redirect('blogindex')->with('sukses','Updatedata!');
    }else{
        $data->update([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'id_kategori' => $request->id_kategori,
        ]);
        return redirect('blogindex')->with('sukses','Updatedata!');
    }
    }

    public function deleteblog($id){
        $data = blog::find($id);
        $data->delete();
        return redirect()->route('blogindex')->with('sukses','Deletedata!');

    }
    public function deletekategori($id)
    {
        $count = blog::where('id_kategori', $id)->count();
        if($count > 0) {
            return back()->with('gagal', 'Status masih digunakan!');
        }

        $data=Kategoriblog::find($id);
        $data->delete();
        return redirect('kategoriindex');
    }
    public function kategoriindex()
    {
        $data=Kategoriblog::all();
        return view('admin.blog.kategoriblog',compact('data'));
    }

    public function kategoricreate()
    {
        $data=Kategoriblog::all();
        return view('admin.blog.kategoricreate',compact('data'));
    }
    public function kategoristore(Request $request)
    {   $data = Kategoriblog::create([
            'kategori' => $request->kategori,
        ]);
        return redirect()->route('kategoriindex')->with('success', 'Data Berhasil Di Tambahkan');
    }

    public function kategoriedit($id)
    {
        $data = Kategoriblog::findOrfail($id);
        return view('admin.blog.kategoriedit',compact('data'));
    }

    public function kategoriupdate($id,Request $request)
    {
        $data=Kategoriblog::find($request->id);
        $data->update($request->all());
        return redirect('kategoriindex');
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
        $pesan = [
            'required' => ':attribute Wajib di isi',
            'min' => ':attribute Wajib di isi minimal : min karakter',
            'max' => ':attribute Wajib di isi maximal : max karakter',

        ];
        $this->validate($request,[
            'foto' => 'required',
            'namaevent' => 'required|min:2|max:100',
            'tempat' => 'required|min:2|max:100',
            'tanggalevent' => 'required',
            'jamevent' => 'required',
            'deskripsi' => 'required',
        ] , $pesan );
        if($request->hasFile('foto')){
            $request->file('foto')->move('event/', $request->file('foto')->getClientOriginalName());
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
        $pesan = [
            'required' => ':attribute Wajib di isi',
            'min' => ':attribute Wajib di isi minimal : min karakter',
            'max' => ':attribute Wajib di isi maximal : max karakter',

        ];
        $this->validate($request,[
            'namaevent' => 'required|min:2|max:100',
            'tempat' => 'required|min:2|max:100',
            'tanggalevent' => 'required',
            'jamevent' => 'required',
            'deskripsi' => 'required',
        ] , $pesan );
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
            'link' => 'required',
            'jam' => 'required',
            'lokasi' => 'required',
            'alamat' => 'required',
        ]);
        $data = sudutecho::create([
            'fotoecho' => $request->fotoecho,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'link' => $request->link,
            'jam' => $request->jam,
            'lokasi' => $request->lokasi,
            'alamat' => $request->alamat,
        ]);
        return redirect('echoindex');
    
    }

    public function echoupdate(Request $request)
    {
        $data=sudutecho::find($request->id);
        if ($request->hasfile('fotoecho')) {
            $foto = $request->file('fotoecho')->getClientOriginalName();
            $request->file('fotoecho')->move('foto/', $foto);
            $data->update([
                'judul' => $request->judul,
                'fotoecho' => $request->file('fotoecho')->getClientOriginalName(),
                'deskripsi' => $request->deskripsi,
                'link' => $request->link,
                'jam' => $request->jam,
                'lokasi' => $request->lokasi,
                'alamat' => $request->alamat,
            ]);
            return redirect()->route('echoindex')->with('success', 'Data Berhasil Di Update');
        } else {
            $data->update([
                'judul' => $request->judul,
                'deskripsi' => $request->deskripsi,
                'link' => $request->link,
                'jam' => $request->jam,
                'lokasi' => $request->lokasi,
                'alamat' => $request->alamat,
            ]);
            return redirect()->route('echoindex')->with('success', 'Data Berhasil Di Update');
        }
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
            'fotokepsek'=> 'required',
            'sambutan' => 'required',
        ]);
        $data = Sambutan::create([
            'judul' => $request->judul,
            'fotokepsek' => $request->fotokepsek,
            'sambutan' => $request->sambutan,
        ]);
        return redirect('smbtnindex');
    
    }

    public function smbtnupdate(Request $request)
    {
        $data=Sambutan::find($request->id);
        if ($request->hasfile('fotokepsek')) {
            $foto = $request->file('fotokepsek')->getClientOriginalName();
            $request->file('fotokepsek')->move('foto/', $foto);
            $data->update([
                'judul' => $request->judul,
                'fotokepsek' => $request->file('fotokepsek')->getClientOriginalName(),
                'sambutan' => $request->sambutan,
            ]);
            return redirect()->route('smbtnindex')->with('success', 'Data Berhasil Di Update');
        } else {
            $data->update([
                'judul' => $request->judul,
                'sambutan' => $request->sambutan,
            ]);
            return redirect()->route('smbtnindex')->with('success', 'Data Berhasil Di Update');
        }
    }

    public function smbtnguruindex()
    {
        $data = Sambutan::where('id','=',1)->firstOrFail();
        return view('admin.data.sambutanguru',compact('data'));
    }

    public function smbtngurustore(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'deskripsi' => 'required',
        ]);
        $data = sambutan::create([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
        ]);
        return redirect('smbtnguruindex');
    
    }

    public function smbtnguruupdate(Request $request)
    {
        $data=Sambutan::find($request->id);
        $data->update($request->all());
        return redirect('smbtnguruindex');
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
        return view('admin.fitur.slider', compact('data'));
    }

    public function slidercreate()
    {
        
        return view('admin.fitur.slidercreate');
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

    public function slideredit(Request $request, $id)
    {
        $data = Slider::findOrfail($id);
        return view('admin.fitur.slideredit',compact('data'));
    }

    public function sliderupdate($id,Request $request)
    {
        $data = DB::table('sliders')->where('id',$id);
        if($request->hasFile('foto')){
            $pindah = $request->file('foto')->move(public_path().'\storage', $request->file('foto')->getClientOriginalName());
            $data = Slider::find($id)->update([
               'judul' => $request->judul,
               'deskripsi' => $request->deskripsi,
               'foto' => $request->file('foto')->getClientOriginalName(),
            ]);
        return redirect('slider')->with('sukses','Updatedata!');
    }else{
        $data->update([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
        ]);
        return redirect('slider')->with('sukses','Updatedata!');
    }
    }
    public function destroy($id)
    {
        $data = Slider::find($id);
        $data->delete();
        return redirect()->route('slider')->with('success', 'Data Berhasil Dihapus');
    
    }
}
