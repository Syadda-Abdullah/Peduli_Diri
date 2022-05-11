<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class user_controller extends Controller
{
    
    public function halaman_register()
    {
        return view('pages.register');
    }
    public function simpan_register(Request  $request)
    {   
        $request->validate([
            'NIK'=>'required|unique:users,email|min:16|max:16',
            'namaLengkap'=>'required',
        ],
        [
            'NIK.unique'=>'NIK Sudah Terdaftar',
            'namaLengkap.required'=>'Nama tidak boleh kosong'
        ]
        );

        $data = [
            'nama' => $request->namaLengkap,
            'email' => $request->NIK,
            'password' =>bcrypt ($request->NIK)
        ];
        // dd($data);
        User::create($data);
        return redirect()->route('login');
    }
}
