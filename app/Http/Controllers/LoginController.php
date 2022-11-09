<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        return view('admin.login');
    }
    public function postlogin (Request $request)
    {
        $pesan = [
            'required' => ':attribute required!',
        ];
        $this->validate($request,[
            'email' => 'required|email|exists:users,email',
            'password' => 'required',
        ],$pesan );

        if(Auth::attempt($request->only('email','password'))){
          
            return redirect('/dashboard');
        }
        // return redirect('/login');
    }
}
