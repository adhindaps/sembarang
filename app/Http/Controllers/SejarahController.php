<?php

namespace App\Http\Controllers;

use App\Models\Sejarah;
use App\Models\Bkk;
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
            'nama' => 'required',
            'deskripsi' => 'required',
        ]);
        $data = Sejarah::create([
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
        $data = Beasiswa::where('id','=',1)->firstOrFail();
        return view('admin.fasilitas.beasiswaindex',compact('data'));
    }
    public function beasiswastore(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'desk' => 'required',
        ]);
        $data = Sejarah::create([
            'name' => $request->name,
            'desk' => $request->desk,
        ]);
        return redirect('beasiswaindex');
    
    }

    public function beasiswaupdate(Request $request)
    {
        $data=Beasiswa::find($request->id);
        $data->update($request->all());
        return redirect('beasiswaindex');
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
            $request->file('fotobk')->move('foto/', $request->file('fotobk')->getClientOriginalName());
        $data = Bkk::create([
            'fotobk' => $request->file('fotobk')->getClientOriginalName(),
            'perusahaan' => $request->perusahaan,
            'deskripsi' => $request->deskripsi,
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
        if($request->hasFile('fotobkk')){
            $pindah = $request->file('fotobkk')->move(public_path().'\storage', $request->file('fotobkk')->getClientOriginalName());
            $data = Bkk::find($id)->update([
                'fotobkk' => $request->file('fotobkk')->getClientOriginalName(),
               'perusahaan' => $request->perusahaan,
               'deskripsi' => $request->deskripsi,
              
            ]);
        return redirect('bkkindex')->with('sukses','Updatedata!');
    }else{
        $data->update([
            'perusahaan' => $request->perusahaan,
            'deskripsi' => $request->deskripsi,
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
