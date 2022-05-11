<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class login_controller extends Controller
{
    public function construct()
    {
        $this->middleware('guest')->expect('logout');
    }

    public function halaman_login() 
    {
        return view('pages.login');
    }

    public function Login(Request $request)
    {
        //dd ($request->all());
        if(Auth::attempt(['email' => $request->NIK, 'password' =>$request->password,'nama'=>$request->nama])){
        // if (Auth::attempt($request->only('name','email','password'))){
            return redirect('/home');
        }
        return redirect('/login')->with('message','Login Gagal');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
