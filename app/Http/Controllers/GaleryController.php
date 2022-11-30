<?php

namespace App\Http\Controllers;

use App\Models\Galery;
use Illuminate\Http\Request;

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
}
