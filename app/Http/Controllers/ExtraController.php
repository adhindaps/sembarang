<?php

namespace App\Http\Controllers;

use App\Models\Extra;
use App\Models\Footer;
use App\Models\FooterLink;
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
        $data = Extra::all();
        return view('admin.sekolah.extraindex', compact('data'));
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
        $pesan = [
            'required' => ':attribute Wajib di isi',
            'min' => ':attribute Wajib di isi minimal : min karakter',
            'max' => ':attribute Wajib di isi maximal : max karakter',

        ];
        $this->validate($request,[
            'fotoex' => 'required',
            'logo' => 'required',
            'subjudul' => 'required|min:2|max:100',
            'extra' => 'required',
            'deskripsi' => 'required',
        ] , $pesan );

        $data = Extra::create([
            'fotoex' => $request->fotoex,
            'logo' => $request->logo,
            'subjudul' => $request->subjudul,
            'extra' => $request->extra,
            'deskripsi' => $request->deskripsi,
        ]);
        // dd($data);
        if ($request->hasFile('fotoex')) {
            $request->file('fotoex')->move('foto/', $request->file('fotoex')->getClientOriginalName());
            $data->fotoex = $request->file('fotoex')->getClientOriginalName();
        }
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
        return view('admin.sekolah.extraedit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Extra  $extra
     * @return \Illuminate\Http\Response
     */
    public function extraupdate($id, Request $request, Extra $extra)
    { 
        $pesan = [
            'required' => ':attribute Wajib di isi',
            'min' => ':attribute Wajib di isi minimal : min karakter',
            'max' => ':attribute Wajib di isi maximal : max karakter',

        ];
        $this->validate($request,[
            'subjudul' => 'required|min:2|max:100',
            'extra' => 'required|max:100',
            'deskripsi' => 'required',
        ] , $pesan );

        $data = Extra::find($id);
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
    public function destroy($id)
    {
        $data = Extra::find($id);
        $data->delete();
        return redirect()->route('extraindex')->with('success', 'Data Berhasil Dihapus');
    
    }

    public function footerindex()
    {
        $data=Footer::all();
        return view('admin.fitur.footerindex',compact('data'));
    }
    public function footerstore(Request $request)
    {
        $pesan = [
            'required' => ':attribute Wajib di isi',
            'min' => ':attribute Wajib di isi minimal : min karakter',
            'max' => ':attribute Wajib di isi maximal : max karakter',

        ];
        $this->validate($request,[
            'logo' => 'required',
            'namasekolah' => 'required|min:2|max:100',
            'deskripsi' => 'required',
        ] , $pesan );
        if($request->hasFile('logo')){
            $request->file('logo')->move('foto/', $request->file('logo')->getClientOriginalName());
        $data = Footer::create([
            'logo' => $request->file('logo')->getClientOriginalName(),
            'namasekolah' => $request->namasekolah,
            'deskripsi' => $request->deskripsi,
        ]);
        $data->logo = $request->file('logo')->getClientOriginalName();
    }
        return redirect()->route('footerindex')->with('success', 'Data Berhasil Di Tambahkan');
    }

    public function footeredit($id)
    {
        $data = Footer::findOrfail($id);
        return view('admin.fitur.footeredit',compact('data'));
    }

    public function footerupdate($id,Request $request)
    {
        $pesan = [
            'required' => ':attribute Wajib di isi',
            'min' => ':attribute Wajib di isi minimal : min karakter',
            'max' => ':attribute Wajib di isi maximal : max karakter',

        ];
        $this->validate($request,[
            'namasekolah' => 'required|min:2|max:100',
            'deskripsi' => 'required',
        ] , $pesan );
        $data = DB::table('footers')->where('id',$id);
        if($request->hasFile('logo')){
            $pindah = $request->file('logo')->move(public_path().'\storage', $request->file('logo')->getClientOriginalName());
            $data = Footer::find($id)->update([
               'namasekolah' => $request->namasekolah,
               'deskripsi' => $request->deskripsi,
               'logo' => $request->file('logo')->getClientOriginalName(),
            ]);
        return redirect('footerindex')->with('sukses','Updatedata!');
    }else{
        $data->update([
            'namasekolah' => $request->namasekolah,
            'deskripsi' => $request->deskripsi,
        ]);
        return redirect('footerindex')->with('sukses','Updatedata!');
    }
    }
    public function footerlinkindex()
    {
        $data=FooterLink::all();
        return view('admin.fitur.footerlink',compact('data'));
    }
    public function footercreate()
    {
        return view('admin.fitur.footerlinkcreate');
    }
    public function footerlinkstore(Request $request)
    {
        $data = FooterLink::create([
            'halaman' => $request->halaman,
            'link' => $request->link,
        ]);
        return redirect()->route('footerlinkindex')->with('success', 'Data Berhasil Di Tambahkan');
    }

    public function footerlinkedit($id)
    {
        $data = FooterLink::findOrfail($id);
        return view('admin.fitur.footerlinkedit',compact('data'));
    }

    public function footerlinkupdate($id,Request $request)
    {
        $data=FooterLink::find($request->id);
        $data->update($request->all());
        return redirect('footerlinkindex');
    }
    public function footerhapus($id)
    {
        $data = FooterLink::find($id);
        $data->delete();
        return redirect()->route('footerlinkindex')->with('success', 'Data Berhasil Dihapus');
    
    }

}
