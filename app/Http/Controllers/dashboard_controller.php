<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class dashboard_controller extends Controller
{
    public function index() {
        if(is_null(auth()->user())){
        return redirect()->route('login');
        }

        $data = DB::table('perjalanans')
        ->join('users', 'users.id', 'perjalnans.id_user')
        ->select('users.email', 'perjalanans.*')
        ->where('users.id', '=', auth()->user()->id)
        ->get();
        
        return view('layouts.master',['data'=> $data->reverse()]);
    }

    public function cari_data(Request $request){
        $tipe_data = $request->tipe_data;
        if($tipe_data == "tanggal"){
            $cari = $request->tanggal;
            $data = User::join('perjalanans', "perjalanans.id_user", "=", "users.id")
                ->where(function ($query) use($cari) {
                    $query->where('users.id', auth()->user()->id)
                    ->where('perjalanans.tanggal', 'LIKE', '%'.$cari.'%');
            })->get(['users.nama', 'perjalanans.*']);

            return view('layout.data', ['data' => $data]);
        } else if($tipe_data == "jam"){
            $cari = $request->jam;
            $data = User::join('perjalanans', "perjalanans.id_user", "=", "users.id")
                ->where(function ($query) use($cari) {
                    $query->where('users.id', auth()->user()->id)
                    ->where('perjalanans.jam', 'LIKE', '%'.$cari.'%');
            })->get(['users.nama', 'perjalanans.*']);

            return view('layout.data', ['data' => $data]);

        } else if($tipe_data == "lokasi"){
            $cari = $request->lokasi;
            $data = User::join('perjalanans', "perjalanans.id_user", "=", "users.id")
                ->where(function ($query) use($cari) {
                    $query->where('users.id', auth()->user()->id)
                    ->where('perjalanans.lokasi', 'LIKE', '%'.$cari.'%');
            })->get(['users.nama', 'perjalanans.*']);

            return view('layout.data', ['data' => $data]);

        } else if($tipe_data == "suhu"){
            $cari = $request->suhu;
            $data = User::join('perjalanans', "perjalanans.id_user", "=", "users.id")
                ->where(function ($query) use($cari) {
                    $query->where('users.id', auth()->user()->id)
                    ->where('perjalanans.suhu', 'LIKE', '%'.$cari.'%');
        })->get(['users.nama', 'users.email', 'perjalanans.*']);

        return view('pages.data', ['data' => $data]);
        }

    }

}
