<?php

namespace App\Http\Controllers;

use App\Models\Galery;
use App\Models\GaleriAxio;
use App\Models\GaleriEcho;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GaleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function galeryindex()
    {
        $data=Galery::all();
        return view('admin.sekolah.galeryindex',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function galerycreate()
    {
        return view('admin.sekolah.galerycreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function galerystore(Request $request)
    {
        if($request->hasFile('fotokgt')){
            $request->file('fotokgt')->move('foto/', $request->file('fotokgt')->getClientOriginalName());
        $data = Galery::create([
            'fotokgt' => $request->file('fotokgt')->getClientOriginalName(),
            'judul' => $request->judul,
            
        ]);
        $data->fotokgt = $request->file('fotokgt')->getClientOriginalName();
    }
        return redirect()->route('galeryindex')->with('success', 'Data Berhasil Di Tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Galery  $galery
     * @return \Illuminate\Http\Response
     */
    public function show(Galery $galery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Galery  $galery
     * @return \Illuminate\Http\Response
     */
    public function edit(Galery $galery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Galery  $galery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Galery $galery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Galery  $galery
     * @return \Illuminate\Http\Response
     */
    public function deletegaleri($id)
    {
        $data = Galery::find($id);
        $data->delete();
        return redirect('galeryindex')->with('success', 'Data Berhasil Dihapus');
    
    }

    public function galeriaxioindex()
    {
        $data=GaleriAxio::all();
        return view('admin.fasilitas.galeriaxio',compact('data'));
    }
    public function galeriaxiocreate()
    {
        return view('admin.fasilitas.galcreate');
    }
    public function galeriaxiostore(Request $request)
    {
        $pesan = [
            'required' => ':attribute Wajib di isi',
            'min' => ':attribute Wajib di isi minimal : min karakter',
            'max' => ':attribute Wajib di isi maximal : max karakter',

        ];
        $this->validate($request,[
            'foto1' => 'required',
            'namakegiatan' => 'required|min:2|max:100',
           
        ] , $pesan );
        if($request->hasFile('foto1')){
            $request->file('foto1')->move('axio/', $request->file('foto1')->getClientOriginalName());
        $data = GaleriAxio::create([
            'namakegiatan' => $request->namakegiatan,
            'foto1' => $request->file('foto1')->getClientOriginalName(),
        ]);
        $data->foto1 = $request->file('foto1')->getClientOriginalName();
    }
        return redirect()->route('galeriaxioindex')->with('success', 'Data Berhasil Di Tambahkan');
    }
    public function galeriaxioedit($id)
    {
        $data = GaleriAxio::find($id);
        $data = GaleriAxio::findOrfail($id);
        return view('admin.fasilitas.galeriedit',compact('data'));
    }
    public function galeriaxioupdate($id,Request $request)
    {
        $pesan = [
            'required' => ':attribute Wajib di isi',
            'min' => ':attribute Wajib di isi minimal : min karakter',
            'max' => ':attribute Wajib di isi maximal : max karakter',

        ];
        $this->validate($request,[
            'foto1' => 'required',
            'namakegiatan' => 'required|min:2|max:100',
           
        ] , $pesan );
        $data = DB::table('galeri_axios')->where('id',$id);
        if($request->hasFile('foto1')){
            $pindah = $request->file('foto1')->move(public_path().'\storage', $request->file('foto1')->getClientOriginalName());
            $data = GaleriAxio::find($id)->update([
               'namakegiatan' => $request->namakegiatan,
               'foto1' => $request->file('foto1')->getClientOriginalName(),
            ]);
        return redirect('galeriaxioindex')->with('sukses','Updatedata!');
    }else{
        $data->update([
            'namakegiatan' => $request->namakegiatan,
        ]);
        return redirect('galeriaxioindex')->with('sukses','Updatedata!');
    }
    }

    
    public function galeriechoindex()
    {
        $data=GaleriEcho::all();
        return view('admin.fasilitas.galeriecho',compact('data'));
    }
    public function galeriechocreate()
    {
        return view('admin.fasilitas.galechocreate');
    }
    public function galeriechostore(Request $request)
    {
        $pesan = [
            'required' => ':attribute Wajib di isi',
            'min' => ':attribute Wajib di isi minimal : min karakter',
            'max' => ':attribute Wajib di isi maximal : max karakter',

        ];
        $this->validate($request,[
            'foto11' => 'required',
            'namakegiatan' => 'required|min:2|max:100',
           
        ] , $pesan );
        if($request->hasFile('foto11')){
            $request->file('foto11')->move('echo/', $request->file('foto11')->getClientOriginalName());
        $data = GaleriEcho::create([
            'namakegiatan' => $request->namakegiatan,
            'foto11' => $request->file('foto11')->getClientOriginalName(),
        ]);
        $data->foto11 = $request->file('foto11')->getClientOriginalName();
    }
        return redirect()->route('galeriechoindex')->with('success', 'Data Berhasil Di Tambahkan');
    }
    public function galeriechoedit($id)
    {
        $data = GaleriEcho::find($id);
        $data = GaleriEcho::findOrfail($id);
        return view('admin.fasilitas.galechoedit',compact('data'));
    }
    public function galeriechoupdate($id,Request $request)
    {
        $pesan = [
            'required' => ':attribute Wajib di isi',
            'min' => ':attribute Wajib di isi minimal : min karakter',
            'max' => ':attribute Wajib di isi maximal : max karakter',

        ];
        $this->validate($request,[
            'foto11' => 'required',
            'namakegiatan' => 'required|min:2|max:100',
           
        ] , $pesan );
        $data = DB::table('galeri_echoes')->where('id',$id);
        if($request->hasFile('foto11')){
            $pindah = $request->file('foto11')->move(public_path().'\storage', $request->file('foto11')->getClientOriginalName());
            $data = GaleriEcho::find($id)->update([
               'namakegiatan' => $request->namakegiatan,
               'foto11' => $request->file('foto11')->getClientOriginalName(),
            ]);
        return redirect('galeriechoindex')->with('sukses','Updatedata!');
    }else{
        $data->update([
            'namakegiatan' => $request->namakegiatan,
        ]);
        return redirect('galeriechoindex')->with('sukses','Updatedata!');
    }
    }
}
