<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class E5Controller extends Controller
{
    public function index($nama){
        return $nama;
    }

    public function formulir(){
        return view('formulir');
    }

    public function proses(Request $request){
        $NRP = $request->input('NRP');
        $NilaiAngka = $request->input('NilaiAngka');
        $SKS = $request->input('SKS');
        return "NRP : " . $NRP . ",<br>Nilai Angka : " . $NilaiAngka .
        ", <br>SKS : " . $SKS;
    }
}
