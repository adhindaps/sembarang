<?php

namespace App\Http\Controllers;

use App\Models\visi;
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

}
