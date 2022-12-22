<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Galery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class AdminController extends Controller
{
    public function dashboard()
    {
        $data=Galery::all();
        return view('admin.beranda',compact('data'));
    }
    public function siswapres(Request $request)
    {
        return view('admin.siswapres');
    }
    public function profileadmin(Request $request)
    {
        return view('admin.profile');
    }

    public function password() 
    {
        return view('admin.password');
    }
    
    public function changePasswordPosta(Request $request)
    {
        if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
            // The passwords matches
            return redirect()->back()->with("error", "Kata sandi Anda saat ini tidak cocok dengan kata sandi.");
        }
        $validatedData = $request->validate([
            'current-password' => 'required',
            'new-password' => 'required|string|min:3|confirmed',
        ]);

        //Change Password
        $user = Auth::user();
        $user->password = bcrypt($request->get('new-password'));
        $user->save();

        return redirect()->back()->with("success", "Password Berhasil Diubah!");
    }
    
}
