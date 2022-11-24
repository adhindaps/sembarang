<?php

namespace App\Http\Controllers;

use App\Models\Extra;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ExtraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function extraindex()
    {
        $data=Extra::all();
        return view('admin.sekolah.extraindex',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function extracreate()
    {
        return view('admin.sekolah.extracreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function extrastore(Request $request)
    {
       $data = Extra::create([
            'fotoex' => $request->fotoex,
            'logo' => $request->logo,
            'subjudul' => $request->subjudul,
            'extra' => $request->extra,
            'deskripsi' => $request->deskripsi,
        ]);
        // dd($data);
        if($request->hasFile('fotoex')){
            $request->file('fotoex')->move('foto/', $request->file('fotoex')->getClientOriginalName());
        $data->fotoex = $request->file('fotoex')->getClientOriginalName(); }
        if ($request->hasFile('logo')) {
            $request->file('logo')->move('foto/', $request->file('logo')->getClientOriginalName());
            $data->logo = $request->file('logo')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('extraindex')->with('success', 'Data Berhasil Di Tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Extra  $extra
     * @return \Illuminate\Http\Response
     */
    public function show(Extra $extra)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Extra  $extra
     * @return \Illuminate\Http\Response
     */
    public function extraedit($id)
    {
        $data = Extra::find($id);
        $data = Extra::findOrfail($id);
        return view('admin.sekolah.extraedit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Extra  $extra
     * @return \Illuminate\Http\Response
     */
    public function extraupdate($id,Request $request, Extra $extra)
    { $data = Extra::find($id);
        $data->update([
            'subjudul' => $request->subjudul,
            'extra' => $request->extra,
            'deskripsi' => $request->deskripsi,
        ]);
        if ($request->hasFile('fotoex')) {
            $request->file('fotoex')->move('foto/', $request->file('fotoex')->getClientOriginalName());
            $data->fotoex = $request->file('fotoex')->getClientOriginalName();
            $data->save();
        }
        if ($request->hasFile('logo')) {
            $request->file('logo')->move('foto/', $request->file('logo')->getClientOriginalName());
            $data->logo = $request->file('logo')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('extraindex')->with('success', 'Berhasil Di Edit');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Extra  $extra
     * @return \Illuminate\Http\Response
     */
    public function destroy(Extra $extra)
    {
        //
    }
}
