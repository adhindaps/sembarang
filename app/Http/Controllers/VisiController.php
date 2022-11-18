<?php

namespace App\Http\Controllers;

use App\Models\visi;
use Illuminate\Http\Request;

class VisiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexvisi()
    {
        $data = visi::all();
        return view('admin.profile.visimisi',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createvisi()
    {
        return view('admin.profile.createvisi');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storevisi(Request $request)
    {
        $data = visi::create([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
        ]);
        return redirect()->route('indexvisi')->with('success', 'Data Berhasil Di Tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\visi  $visi
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = visi::find($id);    
        $data = visi::findOrfail($id); 
        return view('admin.profile.editvisi', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\visi  $visi
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\visi  $visi
     * @return \Illuminate\Http\Response
     */

    public function updatevisi(Request $request,$id)
    {
        $data = visi::find($id);
        $data->update([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi
        ]);
        return redirect()->route('indexvisi')->with('success', 'Data Berhasil Di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\visi  $visi
     * @return \Illuminate\Http\Response
     */
    public function destroy(visi $visi)
    {
        //
    }
}
