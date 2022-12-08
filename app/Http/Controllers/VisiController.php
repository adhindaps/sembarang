<?php

namespace App\Http\Controllers;

use App\Models\video;
use App\Models\Patner;
use App\Models\Fasilitas;
use App\Models\visi;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class VisiController extends Controller
{
    public function visiindex()
    {
        $data = Visi::where('id','=',1)->firstOrFail();
        return view('admin.profile.visimisi',compact('data'));
    }

    public function visistore(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'deskripsi' => 'required',
        ]);
        $data = visi::create([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
        ]);
        return redirect('visiindex');
    
    }

    public function visiupdate(Request $request)
    {
        $data=Visi::find($request->id);
        $data->update($request->all());
        return redirect('visiindex');
    }

    public function patnerindex()
    {
        $data=Patner::all();
        return view('admin.halaman.kerjasama',compact('data'));
    }

    public function patnercreate()
    {
        $data=Patner::all();
        return view('admin.halaman.kerjasamacreate',compact('data'));
    }
    public function patnerstore(Request $request)
    {
        if($request->hasFile('fotopatner')){
            $request->file('fotopatner')->move('foto/', $request->file('fotopatner')->getClientOriginalName());
        $data = Patner::create([
            'fotopatner' => $request->file('fotopatner')->getClientOriginalName(),
            'nama' => $request->nama,
            'link' => $request->link,
        ]);
        $data->fotopatner = $request->file('fotopatner')->getClientOriginalName();
    }
        return redirect()->route('patnerindex')->with('success', 'Data Berhasil Di Tambahkan');
    }

    public function patneredit($id)
    {
        $data = Patner::findOrfail($id);
        return view('admin.halaman.kerjasamaedit',compact('data'));
    }

    public function patnerupdate($id,Request $request)
    {
        $data = DB::table('patners')->where('id',$id);
        if($request->hasFile('fotopatner')){
            $pindah = $request->file('fotopatner')->move(public_path().'\storage', $request->file('fotopatner')->getClientOriginalName());
            $data = patner::find($id)->update([
                'fotopatner' => $request->file('fotopatner')->getClientOriginalName(),
               'nama' => $request->nama,
               'link' => $request->link,
            ]);
        return redirect('patnerindex')->with('sukses','Updatedata!');
    }else{
        $data->update([
            'nama' => $request->nama,
            'link' => $request->link,
        ]);
        return redirect('patnerindex')->with('sukses','Updatedata!');
    }
    }

    public function deletepatner($id)
    {
        $data = Patner::find($id);
        $data->delete();
        return redirect()->route('patnerindex')->with('success', 'Data Berhasil Dihapus');
    
    }

    public function videoindex()
    {
        $data=Video::all();
        return view('admin.halaman.videoprofile',compact('data'));
    }
    public function videostore(Request $request)
    {
        if($request->hasFile('foto')){
            $request->file('foto')->move('foto/', $request->file('foto')->getClientOriginalName());
        $data = Video::create([
            'judul' => $request->judul,
            'link' => $request->link,
            'foto' => $request->file('foto')->getClientOriginalName(),

        ]);
        $data->foto = $request->file('foto')->getClientOriginalName();
    }
        return redirect()->route('videoindex')->with('success', 'Data Berhasil Di Tambahkan');
    }

    public function videoedit($id)
    {
        $data = Video::findOrfail($id);
        return view('admin.halaman.videoedit',compact('data'));
    }

    public function videoupdate($id,Request $request)
    {
        $data = DB::table('videos')->where('id',$id);
        if($request->hasFile('foto')){
            $pindah = $request->file('foto')->move(public_path().'\storage', $request->file('foto')->getClientOriginalName());
            $data = Video::find($id)->update([
               'judul' => $request->judul,
               'link' => $request->link,
               'foto' => $request->file('foto')->getClientOriginalName(),
            ]);
        return redirect('videoindex')->with('sukses','Updatedata!');
    }else{
        $data->update([
            'judul' => $request->judul,
            'link' => $request->link,
        ]);
        return redirect('videoindex')->with('sukses','Updatedata!');
    }
    }

    public function fasilitasindex()
    {
        $data=Fasilitas::all();
        return view('admin.fasilitas.fasilitas',compact('data'));
    }

    public function fasilitascreate()
    {
        $data=Fasilitas::all();
        return view('admin.fasilitas.fasilitascreate',compact('data'));
    }
    public function fasilitasstore(Request $request)
    {
        if($request->hasFile('foto')){
            $request->file('foto')->move('foto/', $request->file('foto')->getClientOriginalName());
        $data = Fasilitas::create([
            'foto' => $request->file('foto')->getClientOriginalName(),
            'nama' => $request->nama,
        ]);
        $data->foto = $request->file('foto')->getClientOriginalName();
    }
        return redirect()->route('fasilitasindex')->with('success', 'Data Berhasil Di Tambahkan');
    }

    public function fasilitasedit($id)
    {
        $data = Fasilitas::findOrfail($id);
        return view('admin.fasilitas.fasilitasedit',compact('data'));
    }

    public function fasilitasupdate($id,Request $request)
    {
        $data = DB::table('fasilitas')->where('id',$id);
        if($request->hasFile('foto')){
            $pindah = $request->file('foto')->move(public_path().'\storage', $request->file('foto')->getClientOriginalName());
            $data = Fasilitas::find($id)->update([
                'foto' => $request->file('foto')->getClientOriginalName(),
               'nama' => $request->nama,
            ]);
        return redirect('fasilitasindex')->with('sukses','Updatedata!');
    }else{
        $data->update([
            'nama' => $request->nama,
        ]);
        return redirect('fasilitasindex')->with('sukses','Updatedata!');
    }
    }

    public function deletefasilitas($id)
    {
        $data = Fasilitas::find($id);
        $data->delete();
        return redirect()->route('fasilitasindex')->with('success', 'Data Berhasil Dihapus');
    
    }
}
