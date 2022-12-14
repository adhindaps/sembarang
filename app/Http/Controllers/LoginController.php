<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\Models\User;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        return view('admin.login');
    }
    public function postlogin (Request $request)
    {
        $this->validate($request,[
            'email' => 'required|email|exists:users,email',
            'password' => 'required|min:2|max:10',
        ]);
        if(Auth::attempt($request->only('email','password'))){
            return redirect('/dashboard')->with('Sukses','Login Berhasil');
        }else{
            return redirect()->back()->with('password','password salah');
        }
    }

        
        // if(Auth::attempt($request->only('email','password'))){
          
        //     return redirect('/dashboard');

    //     if(Auth::attempt(['email'=>$request->email,'password'=>$request->password])) 
    //         return redirect('/dashboard');

    // }
        // return redirect('/login');

    public function logout(){
        Auth::logout();
        return redirect('/login');
    }
    }

