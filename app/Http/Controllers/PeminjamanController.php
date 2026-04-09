<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peminjaman;

class PeminjamanController extends Controller
{
    public function home(){
        $approved = Peminjaman::where('status','disetujui')->count();
        $waiting = Peminjaman::where('status','menunggu')->count();
        $rejected = Peminjaman::where('status','ditolak')->count();

        return view('home', compact('approved','waiting','rejected'));
    }

    public function form(){
        return view('form');
    }

    public function store(Request $req){
        Peminjaman::create($req->all());
        return redirect('/riwayat');
    }

    public function riwayat(){
        $data = Peminjaman::all();
        return view('riwayat', compact('data'));
    }

    // RULE BASED (CEK)
    public function cek(){
        return view('cek');
    }

    public function cekTanggal(Request $req){
        $cek = Peminjaman::where('tanggal_mulai','<=',$req->tanggal)
            ->where('tanggal_selesai','>=',$req->tanggal)
            ->get();

        return view('cek', compact('cek'));
    }
}
