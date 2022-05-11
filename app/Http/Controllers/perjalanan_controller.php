<?php

namespace App\Http\Controllers;

use App\Models\Perjalanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class perjalanan_controller extends Controller
{
    public function index() {
        $perjalanan = Perjalanan::all();
        $data = $perjalanan->where('id_user', auth()->user()->id);
        return view('pages.data', [
            'data' => $data,
        ]);
    }

    // public function index(){
    //     $data = DB::table('perjalanans')
    //     ->join('users', 'users.id', '=', 'perjalanans.id_user')
    //     ->select('users.email', 'perjalanans.tanggal', 'perjalanans.jam', 'perjalanans.lokasi', 'perjalanans.suhu')
    //     ->where('users.id', '=', auth()->user()->id)
    //     ->get();
    //     return view('pages.data',['data'=>$data]);

    // }

    public function simpan_perjalanan(Request  $request)
    {
        $data = [

            'id_user' =>auth()->user()->id,
            'tanggal' =>$request->tanggal,
            'jam' =>$request->jam,
            'lokasi' =>$request->lokasi,
            'suhu' =>$request->suhu
        ];
        // dd($data);
        Perjalanan::create($data);
        return redirect()->route('table')->with('status', "Data Tersimpan");

    } 

    public function urutkan(Request $request)
    {
        {
            $data = perjalanan::all()->where('id_user', '=', auth()->user()->id);

            if($request->input('suhuDesc')){
                $urut = $request->suhu;
                $sorted = $data->SortByDesc('suhu');
                return view('pages.data', ['data' => $sorted->values()->all()]);
            }else if($request->input('suhuAsc')){
                $urut = $request->suhu;
                $sorted = $data->SortBy('suhu');
                return view('pages.data', ['data' => $sorted->values()->all()]);
            }

            if($request->input('tanggalDesc')){
                $urut = $request->tanggal;
                $sorted = $data->SortByDesc('tanggal');
                return view('pages.data', ['data' => $sorted->values()->all()]);
            }else if($request->input('tanggalAsc')){
                $urut = $request->tanggal;
                $sorted = $data->SortBy('tanggal');
                return view('pages.data', ['data' => $sorted->values()->all()]);
            }

            if($request->input('jamDesc')){
                $urut = $request->jam;
                $sorted = $data->SortByDesc('jam');
                return view('pages.data', ['data' => $sorted->values()->all()]);
            }else if($request->input('jamAsc')){
                $urut = $request->jam;
                $sorted = $data->SortBy('jam');
                return view('pages.data', ['data' => $sorted->values()->all()]);
            }

            if($request->input('lokasiDesc')){
                $urut = $request->lokasi;
                $sorted = $data->SortByDesc('lokasi');
                return view('pages.data', ['data' => $sorted->values()->all()]);
            }else if($request->input('lokasiAsc')){
                $urut = $request->lokasi;
                $sorted = $data->SortBy('lokasi');
                return view('pages.data', ['data' => $sorted->values()->all()]);
            }
        }

    }
}
