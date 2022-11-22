<?php

namespace App\Http\Controllers;

use App\Models\sudutecho;
use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function identitas()
    {
        $data = Profile::where('id','=',1)->firstOrFail();
        return view('admin.profile.identitas', compact(['data']));
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

    public function echoindex()
    {
        $data = sudutecho::where('id','=',1)->firstOrFail();
        return view('admin.fasilitas.echoindex',compact('data'));
    }
    public function echostore(Request $request)
    {
        $this->validate($request, [
            'foto' => 'required',
            'judul' => 'required',
            'deskripsi' => 'required',
        ]);
        $data = sudutecho::create([
            'foto' => $request->foto,
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
    
}
