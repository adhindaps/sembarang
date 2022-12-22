<?php

namespace App\Http\Controllers;

use App\Models\Sejarah;
use App\Models\Bkk;
use App\Models\Axio;
use App\Models\Silaras;
use App\Models\Beasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SejarahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function sejarahindex()
    {
        $data = Sejarah::where('id','=',1)->firstOrFail();
        return view('admin.profile.sejarahindex',compact('data'));
    }

    public function sejarahstore(Request $request)
    {
        $this->validate($request, [
            'fotosjr' => 'required',
            'nama' => 'required',
            'deskripsi' => 'required',
        ]);
        $data = Sejarah::create([
            'fotosjr' => $request->fotosjr,
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
        ]);
        return redirect('sejarahindex');
    
    }
    
    public function updatesjr(Request $request, Sejarah $sejarah)
    {
        $data=Sejarah::find($request->id);
        $data->update($request->all());
        return redirect('sejarahindex');
    }

    public function beasiswaindex()
    {
        $data=Beasiswa::all();
        return view('admin.fasilitas.beasiswaindex',compact('data'));
    }

    
    public function beasiswacreate()
    {
        return view('admin.fasilitas.beasiswacreate');
    }

    public function beasiswastore(Request $request)
    {
        if($request->hasFile('foto')){
            $request->file('foto')->move('foto/', $request->file('foto')->getClientOriginalName());
        $data = Beasiswa::create([
            'name' => $request->name,
            'foto' => $request->file('foto')->getClientOriginalName(),
            'desk' => $request->desk,
        ]);
        $data->foto = $request->file('foto')->getClientOriginalName();
    }
        return redirect()->route('beasiswaindex')->with('success', 'Data Berhasil Di Tambahkan');
    }

    public function beasiswaedit($id)
    {
        $data = Beasiswa::find($id);
        $data = Beasiswa::findOrfail($id);
        return view('admin.fasilitas.beasiswaedit',compact('data'));
    }

    public function beasiswaupdate($id,Request $request)
    {
        $data = DB::table('beasiswas')->where('id',$id);
        if($request->hasFile('foto')){
            $pindah = $request->file('foto')->move(public_path().'\storage', $request->file('foto')->getClientOriginalName());
            $data = Beasiswa::find($id)->update([
               'name' => $request->name,
               'foto' => $request->file('foto')->getClientOriginalName(),
               'desk' => $request->desk,
              
            ]);
        return redirect('beasiswaindex')->with('sukses','Updatedata!');
    }else{
        $data->update([
            'name' => $request->name,
            'desk' => $request->desk,
        ]);
        return redirect('beasiswaindex')->with('sukses','Updatedata!');
    }
    }

    public function beasiswahapus($id)
    {
        $data = Beasiswa::find($id);
        $data->delete();
        return redirect('/beasiswaindex');
    }

    
    public function axioindex()
    {
        $data = Axio::where('id','=',1)->firstOrFail();
        return view('admin.fasilitas.axioindex',compact('data'));
    }
    public function axiostore(Request $request)
    {
        $this->validate($request, [
            'judul' => 'required',
            'deskaxio' => 'required',
            'vidio'=>'required',
        ]);
        $data = Sejarah::create([
            'judul' => $request->judul,
            'deskaxio' => $request->deskaxio,
            'vidio'=> $requrest->vidio,
        ]);
        return redirect('axioindex');
    
    }

    public function axioupdate(Request $request)
    {
        $data=axio::find($request->id);
        $data->update($request->all());
        return redirect('axioindex');
    }
    
    public function silarasindex()
    {
        $data = silaras::where('id','=',1)->firstOrFail();
        return view('admin.fasilitas.silarasindex',compact('data'));
    }
    public function silarasstore(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'judul' => 'required',
            'deskripsilaras' => 'required',
        ]);
        $data = Silaras::create([
            'nama' => $request->nama,
            'judul' => $request->judul,
            'deskripsilaras' => $request->deskripsilaras,
        ]);
        return redirect('silarasindex');
    
    }

    public function silarasupdate(Request $request)
    {
        $data=Silaras::find($request->id);
        $data->update($request->all());
        return redirect('silarasindex');
    }
    

    public function bkkindex()
    {
        $data=Bkk::all();
        return view('admin.sekolah.bkkindex',compact('data'));
    }

    
    public function bkkcreate()
    {
        return view('admin.sekolah.bkkcreate');
    }

    public function bkkstore(Request $request)
    {
        if($request->hasFile('fotobk')){
            $request->file('fotobk')->move('bkk/', $request->file('fotobk')->getClientOriginalName());
        $data = Bkk::create([
            'fotobk' => $request->file('fotobk')->getClientOriginalName(),
            'perusahaan' => $request->perusahaan,
            'judul'=> $request->judul,
            'deskripsi' => $request->deskripsi,
            'alamat'=> $request->alamat,
            'deskperusahaan' => $request->deskperusahaan,
        ]);
        $data->fotobk = $request->file('fotobk')->getClientOriginalName();
    }
        return redirect()->route('bkkindex')->with('success', 'Data Berhasil Di Tambahkan');
    }

    public function bkkedit($id)
    {
        $data = Bkk::find($id);
        $data = Bkk::findOrfail($id);
        return view('admin.sekolah.bkkedit',compact('data'));
    }

    public function bkkupdate($id,Request $request)
    {
        $data = DB::table('bkks')->where('id',$id);
        if($request->hasFile('fotobk')){
            $pindah = $request->file('fotobk')->move(public_path().'\storage', $request->file('fotobk')->getClientOriginalName());
            $data = Bkk::find($id)->update([
                'fotobk' => $request->file('fotobk')->getClientOriginalName(),
               'perusahaan' => $request->perusahaan,
               'judul'=> $request->judul,
               'deskripsi' => $request->deskripsi,
               'alamat'=> $request->alamat,
               'deskperusahaan' => $request->deskperusahaan,
            ]);
        return redirect('bkkindex')->with('sukses','Updatedata!');
    }else{
        $data->update([
            'perusahaan' => $request->perusahaan,
            'judul'=> $request->judul,
            'deskripsi' => $request->deskripsi,
            'alamat'=> $request->alamat,
            'deskperusahaan' => $request->deskperusahaan,
        ]);
        return redirect('bkkindex')->with('sukses','Updatedata!');
    }
    }

    public function bkkhapus($id)
    {
        $data = Bkk::find($id);
        $data->delete();
        return redirect('/bkkindex');
    }

}
