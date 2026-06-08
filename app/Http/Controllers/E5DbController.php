<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class E5DbController extends Controller
{
    public function index()
    {
        // mengambil data dari table unggas
        $nilaikuliah = DB::table('nilaikuliah')->get();

        // mengirim data unggas ke view index
        return view('nilaikuliah.index', ['nilaikuliah' => $nilaikuliah]);
    }

    // method untuk menampilkan view form tambah unggas
    public function tambah()
    {
        // memanggil view tambah
        return view('nilaikuliah.tambahdata');
    }

    // method untuk insert data ke table unggas
    public function store(Request $request)
    {
        // insert data ke table unggas
        DB::table('nilaikuliah')->insert([
            'NRP'   => $request->NRP,
            'NilaiAngka' => $request->NilaiAngka,
            'SKS'     => $request->SKS,
        ]);
        // alihkan halaman ke halaman unggas
        return redirect('/E5');
    }

    // update data unggas
    public function update(Request $request)
    {
        // update data unggas
        DB::table('nilaikuliah')->where('ID', $request->id)->update([
            'NRP'   => $request->NRP,
            'NilaiAngka' => $request->NilaiAngka,
            'SKS'     => $request->SKS,
        ]);
        // alihkan halaman ke halaman unggas
        return redirect('/E5');
    }
}
