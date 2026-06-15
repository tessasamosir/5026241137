<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UnggasController extends Controller
{
    public function index($nama){
        return $nama;
    }

    public function formulir(){
        return view('formulir');
    }

    public function proses(Request $request){
        $namaunggas = $request->input('namaunggas');
        $jumlahunggas = $request->input('jumlahunggas');
        $tersedia = $request->input('tersedia');
        return "Nama Unggas : " . $namaunggas . ",<br>Jumlah : " . $jumlahunggas .
        ", <br>Tersedia : " . $tersedia;
    }
}

