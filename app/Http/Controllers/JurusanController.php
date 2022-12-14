<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use App\Models\Kajur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JurusanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function jurusanindex()
    {
        $data=Jurusan::all();
        return view('admin.data.jurusanindex',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function jurusancreate()
    {
        return view('admin.data.jurusancreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function jurusanstore(Request $request)
    {
        $pesan = [
            'required' => ':attribute Wajib di isi',
            'min' => ':attribute Wajib di isi minimal : min karakter',
            'max' => ':attribute Wajib di isi maximal : max karakter',

        ];
        $this->validate($request,[
            'foto' => 'required',
            'jurusan' => 'required|min:2|max:100',
            'deskripsi' => 'required|min:11|max:100',
        ] , $pesan );
        if($request->hasFile('foto')){
            $request->file('foto')->move('foto/', $request->file('foto')->getClientOriginalName());
        $data = Jurusan::create([
            'foto' => $request->file('foto')->getClientOriginalName(),
            'jurusan' => $request->jurusan,
            'deskripsi' => $request->deskripsi,
        ]);
        $data->foto = $request->file('foto')->getClientOriginalName();
    }
        return redirect()->route('jurusanindex')->with('success', 'Data Berhasil Di Tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jurusan  $jurusan
     * @return \Illuminate\Http\Response
     */
    public function show(Jurusan $jurusan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jurusan  $jurusan
     * @return \Illuminate\Http\Response
     */
    public function jurusanedit($id)
    {
        $data = Jurusan::find($id);
        $data = Jurusan::findOrfail($id);
        return view('admin.data.jurusanedit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jurusan  $jurusan
     * @return \Illuminate\Http\Response
     */
    public function jurusanupdate($id, Request $request, Jurusan $jurusan)
    {
        $pesan = [
            'required' => ':attribute Wajib di isi',
            'min' => ':attribute Wajib di isi minimal : min karakter',
            'max' => ':attribute Wajib di isi maximal : max karakter',

        ];
        $this->validate($request,[
            'jurusan' => 'required|min:2|max:100',
            'deskripsi' => 'required',
        ] , $pesan );
        $data = DB::table('jurusans')->where('id',$id);
        if($request->hasFile('foto')){
            $pindah = $request->file('foto')->move(public_path().'\storage', $request->file('foto')->getClientOriginalName());
            $data = jurusan::find($id)->update([
                'foto' => $request->file('foto')->getClientOriginalName(),
               'jurusan' => $request->jurusan,
               'deskripsi' => $request->deskripsi,
              
            ]);
        return redirect('jurusanindex')->with('sukses','Updatedata!');
    }else{
        $data->update([
            'jurusan' => $request->jurusan,
            'deskripsi' => $request->deskripsi,
        ]);
        return redirect('jurusanindex')->with('sukses','Updatedata!');
    }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jurusan  $jurusan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Jurusan::find($id);
        $data->delete();
        return redirect()->route('jurusanindex')->with('success', 'Data Berhasil Dihapus');
    
    }

    public function kajurindex()
    {
        $data=Kajur::all();
        return view('admin.data.kajur',compact('data'));
    }

    public function kajurcreate()
    {
        $data=Kajur::all();
        $datajurusan=Jurusan::all();
        return view('admin.data.kajurcreate',compact('data','datajurusan'));
    }
    public function kajurstore(Request $request)
    {
        if($request->hasFile('fotokajur')){
            $request->file('fotokajur')->move('foto/', $request->file('fotokajur')->getClientOriginalName());
        $data = Kajur::create([
            'fotokajur' => $request->file('fotokajur')->getClientOriginalName(),
            'nama' => $request->nama,
            'nip' => $request->nip,
            'id_jurusan' => $request->id_jurusan,
        ]);
        $data->fotokajur = $request->file('fotokajur')->getClientOriginalName();
    }
        return redirect()->route('kajurindex')->with('success', 'Data Berhasil Di Tambahkan');
    }

    public function kajuredit($id)
    {
        $data = Kajur::findOrfail($id);
        $datajurusan=Jurusan::all();
        return view('admin.data.kajuredit',compact('data','datajurusan'));
    }

    public function kajurupdate($id,Request $request)
    {
        $pesan = [
            'required' => ':attribute Wajib di isi',
            'min' => ':attribute Wajib di isi minimal : min karakter',
            'max' => ':attribute Wajib di isi maximal : max karakter',

        ];
        $this->validate($request,[
           
            'nama' => 'required|min:2|max:100',
            'nip' => 'required',
        ] , $pesan );
        $data = DB::table('kajurs')->where('id',$id);
        if($request->hasFile('fotokajur')){
            $pindah = $request->file('fotokajur')->move('foto/', $request->file('fotokajur')->getClientOriginalName());
            $data = kajur::find($id)->update([
                'fotokajur' => $request->file('fotokajur')->getClientOriginalName(),
               'nama' => $request->nama,
               'nip' => $request->nip,
               'id_jurusan' => $request->id_jurusan,
            ]);
        return redirect('kajurindex')->with('sukses','Updatedata!');
    }else{
        $data->update([
            'nama' => $request->nama,
            'nip' => $request->nip,
            'id_jurusan' => $request->id_jurusan,
        ]);
        return redirect('kajurindex')->with('sukses','Updatedata!');
    }
    }

    public function deletekajur($id)
    {
        $data = Kajur::find($id);
        $data->delete();
        return redirect()->route('kajurindex')->with('success', 'Data Berhasil Dihapus');
    
    }
}
