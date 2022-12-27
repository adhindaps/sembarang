<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Sosmed;
use App\Models\Status;
use App\Models\Jabatan;
use App\Models\Subjabatan;
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
        $data = Guru::with('status','jabatan','subjabatan')->get();
        return view('admin.data.guru', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function gurucreate()
    {
        $jabatan=Jabatan::all();
        $subjabatan=Subjabatan::all();
        $status=Status::all();
        return view('admin.data.gurucreate',compact('jabatan','subjabatan','status'));
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
        $this->validate($request, [
            'nama' => 'required|min:2|max:100',
            'nip' => 'required|min:11|max:100',
            'tmplahir' => 'required',
            'tgllahir' => 'required',
            'status_id' => 'required',
            'jabatan_id' => 'required',


        ], $pesan);
        if ($request->hasFile('fotoguru')) {
            $request->file('fotoguru')->move('guru/', $request->file('fotoguru')->getClientOriginalName());
            $data = Guru::create([
                'fotoguru' => $request->file('fotoguru')->getClientOriginalName(),
                'nama' => $request->nama,
                'nip' => $request->nip,
                'tmplahir' => $request->tmplahir,
                'tgllahir' => $request->tgllahir,
                'status_id' => $request->status_id,
                'jabatan_id' => $request->jabatan_id,
                'subjabatan_id' => $request->subjabatan_id,
            ]);
        }
        else{
            $data = Guru::create([
                'nama' => $request->nama,
                'nip' => $request->nip,
                'tmplahir' => $request->tmplahir,
                'tgllahir' => $request->tgllahir,
                'status_id' => $request->status_id,
                'jabatan_id' => $request->jabatan_id,
                'subjabatan_id' => $request->subjabatan_id,
            ]);
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
        $guru = Status::all();
        $jabatan = Jabatan::all();
        $subjabatan = Subjabatan::all();
        return view('admin.data.guruedit', compact('data','guru','jabatan','subjabatan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function guruupdate($id, Request $request, Guru $guru)
    {
        $pesan = [
            'required' => ':attribute Wajib di isi',
            'min' => ':attribute Wajib di isi minimal : min karakter',
            'max' => ':attribute Wajib di isi maximal : max karakter',

        ];
        $this->validate($request, [
            'nama' => 'required|min:2|max:100',
            'nip' => 'required',
            'tmplahir' => 'required',
            'tgllahir' => 'required',
         
        ], $pesan);
        $data = DB::table('gurus')->where('id', $id);
        if ($request->hasFile('fotoguru')) {
            $pindah = $request->file('fotoguru')->move(public_path() . '\storage', $request->file('fotoguru')->getClientOriginalName());
            $data = guru::find($id)->update([
                'fotoguru' => $request->file('fotoguru')->getClientOriginalName(),
                'nama' => $request->nama,
                'nip' => $request->nip,
                'tmplahir' => $request->tmplahir,
                'tgllahir' => $request->tgllahir,
                'status_id' => $request->status_id,
                'jabatan_id' => $request->jabatan_id,
                'subjabatan_id' => $request->subjabatan_id,
            ]);
            return redirect('guruindex')->with('sukses', 'Updatedata!');
        } else {
            $data->update([
                'nama' => $request->nama,
                'nip' => $request->nip,
                'tmplahir' => $request->tmplahir,
                'tgllahir' => $request->tgllahir,
                'status_id' => $request->status_id,
                'jabatan_id' => $request->jabatan_id,
                'subjabatan_id' => $request->subjabatan_id,
            ]);
            return redirect('guruindex')->with('sukses', 'Updatedata!');
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
        $data = Sosmed::all();
        return view('admin.sosmed.sosmedindex', compact('data'));
    }


    public function sosmedcreate()
    {
        return view('admin.sosmed.sosmedcreate');
    }

    public function sosmedstore(Request $request)
    {
        if ($request->hasFile('icon')) {
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
        return view('admin.sosmed.sosmededit', compact('data'));
    }

    public function sosmedupdate($id, Request $request)
    {
        $data = DB::table('sosmeds')->where('id', $id);
        if ($request->hasFile('icon')) {
            $pindah = $request->file('icon')->move(public_path() . '\storage', $request->file('icon')->getClientOriginalName());
            $data = Sosmed::find($id)->update([
                'icon' => $request->file('icon')->getClientOriginalName(),
                'sosmed' => $request->sosmed,

            ]);
            return redirect('sosmedindex')->with('sukses', 'Updatedata!');
        } else {
            $data->update([
                'sosmed' => $request->sosmed,
            ]);
            return redirect('sosmedindex')->with('sukses', 'Updatedata!');
        }
    }

    public function sosmedhapus($id)
    {
        $data = Sosmed::find($id);
        $data->delete();
        return redirect('/sosmedindex');
    }

    public function deletestatus($id)
    {
        $count = Guru::where('status_id', $id)->count();
        if($count > 0) {
            return back()->with('gagal', 'Status masih digunakan!');
        }

        $data=Status::find($id);
        $data->delete();
        return redirect('status');
    }
    public function status()
    {
        $data=Status::all();
        return view('admin.data.status',compact('data'));
    }

    public function statustambah()
    {
        $data=Status::all();
        return view('admin.data.statustambah',compact('data'));
    }
    public function statusstore(Request $request)
    {   $data = Status::create([
            'status' => $request->status,
        ]);
        return redirect()->route('status')->with('success', 'Data Berhasil Di Tambahkan');
    }

    public function statusedit($id)
    {
        $data = Status::findOrfail($id);
        return view('admin.data.statusedit',compact('data'));
    }

    public function statusupdate($id,Request $request)
    {
        $data=Status::find($request->id);
        $data->update($request->all());
        return redirect('status');
    }

    public function deletejabatan($id)
    {
        $count = Guru::where('jabatan_id', $id)->count();
        if($count > 0) {
            return back()->with('gagal', 'Status masih digunakan!');
        }

        $data=Jabatan::find($id);
        $data->delete();
        return redirect('jabatan');
    }
    public function jabatan()
    {
        $data=Jabatan::all();
        return view('admin.data.jabatan',compact('data'));
    }

    public function jabatantambah()
    {
        $data=Jabatan::all();
        return view('admin.data.jabatantambah',compact('data'));
    }
    public function jabatanstore(Request $request)
    {   $data = Jabatan::create([
            'jabatan' => $request->jabatan,
        ]);
        return redirect()->route('jabatan')->with('success', 'Data Berhasil Di Tambahkan');
    }

    public function jabatanedit($id)
    {
        $data = Jabatan::findOrfail($id);
        return view('admin.data.jabatanedit',compact('data'));
    }

    public function jabatanupdate($id,Request $request)
    {
        $data=Jabatan::find($request->id);
        $data->update($request->all());
        return redirect('jabatan');
    }

    public function deletesubjabatan($id)
    {
        $count = Guru::where('subjabatan_id', $id)->count();
        if($count > 0) {
            return back()->with('gagal', 'Status masih digunakan!');
        }
        
        $data=Subjabatan::find($id);
        $data->delete();
        return redirect('subjabatan');
    }
    public function subjabatan()
    {
        $data=Subjabatan::all();
        return view('admin.data.subjabatan',compact('data'));
    }

    public function subjabatantambah()
    {
        $data=Subjabatan::all();
        return view('admin.data.subjabatantambah',compact('data'));
    }
    public function subjabatanstore(Request $request)
    {   $data = Subjabatan::create([
            'subjabatan' => $request->subjabatan,
        ]);
        return redirect()->route('subjabatan')->with('success', 'Data Berhasil Di Tambahkan');
    }

    public function subjabatanedit($id)
    {
        $data = Subjabatan::findOrfail($id);
        return view('admin.data.subjabatanedit',compact('data'));
    }

    public function subjabatanupdate($id,Request $request)
    {
        $data=Subjabatan::find($request->id);
        $data->update($request->all());
        return redirect('subjabatan');
    }
}
