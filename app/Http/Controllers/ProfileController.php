<?php

namespace App\Http\Controllers;

use App\Models\sudutecho;
use App\Models\Profile;
use App\Models\blog;
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

     public function blogindex()
    {
        $data = blog::where('id','=',1)->firstOrFail();
        return view('admin.blogindex', compact(['data']));
    }

    public function blogcreate()
    {
        
        return view('admin.blogcreat');
    }

    public function blogstore(Request $request)
    {
        if($request->hasFile('foto')){
            $request->file('foto')->move('foto/', $request->file('foto')->getClientOriginalName());
        $data = blog::create([
            'foto' => $request->file('foto')->getClientOriginalName(),
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
        ]);
        $data->foto = $request->file('foto')->getClientOriginalName();
    }
        return redirect()->route('blogindex')->with('success', 'Data Berhasil Di Tambahkan');
    }

    public function blogedit($id)
    {
        $data = blog::find($id);
        $data = blog::findOrfail($id);
        return view('admin.blognedit',compact('data'));
    }

    public function blogupdate($id, Request $request, Profile $blog)
    {
        $data = DB::table('blogs')->where('id',$id);
        if($request->hasFile('foto')){
            $pindah = $request->file('foto')->move(public_path().'\storage', $request->file('foto')->getClientOriginalName());
            $data = blog::find($id)->update([
                'foto' => $request->file('foto')->getClientOriginalName(),
               'blog' => $request->blog,
               'deskripsi' => $request->deskripsi,
              
            ]);
        return redirect('jurusanindex')->with('sukses','Updatedata!');
    }else{
        $data->update([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
        ]);
        return redirect('jurusanindex')->with('sukses','Updatedata!');
    }
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
