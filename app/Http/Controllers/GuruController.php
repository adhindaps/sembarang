<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Sosmed;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function guruindex()
    {
        $data=Guru::all();
        return view('admin.data.guru',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function gurucreate()
    {
        return view('admin.data.gurucreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function gurustore(Request $request)
    {
        $pesan = [
            'required' => ':attribute Wajib di isi',
            'min' => ':attribute Wajib di isi minimal : min karakter',
            'max' => ':attribute Wajib di isi maximal : max karakter',

        ];
        $this->validate($request,[
            'fotoguru' => 'required',
            'nama' => 'required|min:2|max:100',
            'nip' => 'required|min:11|max:100',
            'tmplahir' => 'required',
            'tgllahir' => 'required',
            'status' => 'required',
            'jabatan' => 'required',
        ] , $pesan );
        if($request->hasFile('fotoguru')){
            $request->file('fotoguru')->move('foto/', $request->file('fotoguru')->getClientOriginalName());
        $data = Guru::create([
            'fotoguru' => $request->file('fotoguru')->getClientOriginalName(),
            'nama' => $request->nama,
            'nip' => $request->nip,
               'tmplahir' => $request->tmplahir,
               'tgllahir' => $request->tgllahir,
               'status' => $request->status,
            'jabatan' => $request->jabatan,
        ]);
        $data->fotoguru = $request->file('fotoguru')->getClientOriginalName();
    }
        return redirect()->route('guruindex')->with('success', 'Data Berhasil Di Tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function show(Guru $guru)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function guruedit($id)
    {
        $data = Guru::find($id);
        $data = Guru::findOrfail($id);
        return view('admin.data.guruedit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function guruupdate($id,Request $request, Guru $guru)
    {
        $pesan = [
            'required' => ':attribute Wajib di isi',
            'min' => ':attribute Wajib di isi minimal : min karakter',
            'max' => ':attribute Wajib di isi maximal : max karakter',

        ];
        $this->validate($request,[
            'nama' => 'required|min:2|max:100',
            'nip' => 'required|min:11|max:100',
            'tmplahir' => 'required',
            'tgllahir' => 'required',
            'status' => 'required',
            'jabatan' => 'required',
        ] , $pesan );
        $data = DB::table('gurus')->where('id',$id);
        if($request->hasFile('fotoguru')){
            $pindah = $request->file('fotoguru')->move(public_path().'\storage', $request->file('fotoguru')->getClientOriginalName());
            $data = guru::find($id)->update([
                'fotoguru' => $request->file('fotoguru')->getClientOriginalName(),
               'nama' => $request->nama,
               'nip' => $request->nip,
               'tmplahir' => $request->tmplahir,
               'tgllahir' => $request->tgllahir,
               'status' => $request->status,
               'jabatan' => $request->jabatan,
            ]);
        return redirect('guruindex')->with('sukses','Updatedata!');
    }else{
        $data->update([
            'nama' => $request->nama,
            'nip' => $request->nip,
               'tmplahir' => $request->tmplahir,
               'tgllahir' => $request->tgllahir,
               'status' => $request->status,
            'jabatan' => $request->jabatan,
        ]);
        return redirect('guruindex')->with('sukses','Updatedata!');
    }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Guru::find($id);
        $data->delete();
        return redirect()->route('guruindex')->with('success', 'Data Berhasil Dihapus');
    
    }

    public function sosmedindex()
    {
        $data=Sosmed::all();
        return view('admin.sosmed.sosmedindex',compact('data'));
    }

    
    public function sosmedcreate()
    {
        return view('admin.sosmed.sosmedcreate');
    }

    public function sosmedstore(Request $request)
    {
        if($request->hasFile('icon')){
            $request->file('icon')->move('foto/', $request->file('icon')->getClientOriginalName());
        $data = Sosmed::create([
            'icon' => $request->file('icon')->getClientOriginalName(),
            'sosmed' => $request->sosmed,
        ]);
        $data->icon = $request->file('icon')->getClientOriginalName();
    }
        return redirect()->route('sosmedindex')->with('success', 'Data Berhasil Di Tambahkan');
    }

    public function sosmededit($id)
    {
        $data = Sosmed::find($id);
        $data = Sosmed::findOrfail($id);
        return view('admin.sosmed.sosmededit',compact('data'));
    }

    public function sosmedupdate($id,Request $request)
    {
        $data = DB::table('sosmeds')->where('id',$id);
        if($request->hasFile('icon')){
            $pindah = $request->file('icon')->move(public_path().'\storage', $request->file('icon')->getClientOriginalName());
            $data = Sosmed::find($id)->update([
               'icon' => $request->file('icon')->getClientOriginalName(),
               'sosmed' => $request->sosmed,
              
            ]);
        return redirect('sosmedindex')->with('sukses','Updatedata!');
    }else{
        $data->update([
            'sosmed' => $request->sosmed,
        ]);
        return redirect('sosmedindex')->with('sukses','Updatedata!');
    }
    }


    public function sosmedhapus($id)
    {
        $data = Sosmed::find($id);
        $data->delete();
        return redirect('/sosmedindex');
    }

}
