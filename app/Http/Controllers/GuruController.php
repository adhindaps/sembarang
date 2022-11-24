<?php

namespace App\Http\Controllers;

use App\Models\Guru;
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
        if($request->hasFile('fotoguru')){
            $request->file('fotoguru')->move('foto/', $request->file('fotoguru')->getClientOriginalName());
        $data = Guru::create([
            'fotoguru' => $request->file('fotoguru')->getClientOriginalName(),
            'nama' => $request->nama,
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
        $data = DB::table('gurus')->where('id',$id);
        if($request->hasFile('fotoguru')){
            $pindah = $request->file('fotoguru')->move(public_path().'\storage', $request->file('fotoguru')->getClientOriginalName());
            $data = guru::find($id)->update([
                'fotoguru' => $request->file('fotoguru')->getClientOriginalName(),
               'nama' => $request->nama,
               'jabatan' => $request->jabatan,
              
            ]);
        return redirect('guruindex')->with('sukses','Updatedata!');
    }else{
        $data->update([
            'nama' => $request->nama,
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
}
