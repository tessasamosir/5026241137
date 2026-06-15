<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class mypegawaiDbController extends Controller
{
    public function index()
    {
        $mypegawai = DB::table('mypegawai')->get();

        return view('mypegawai.index', ['mypegawai' => $mypegawai]);
    }

    public function tambah()
    {
        // memanggil view tambah
        return view('mypegawai.tambah');
    }

    public function store(Request $request)
    {
        // insert data ke table unggas
        DB::table('mypegawai')->insert([
            'kodepegawai'   => $request->kodepegawai,
            'namalengkap' => $request->namalengkap,
            'divisi'     => $request->divisi,
            'departemen'     => $request->departemen,
        ]);
        return redirect('/eas');
    }

    public function update(Request $request)
    {
        DB::table('mypegawai')->where('kodepegawai', $request->kodepegawai)->update([
            'kodepegawai'   => $request->kodepegawai,
            'namalengkap' => $request->namalengkap,
            'divisi'     => $request->divisi,
            'departemen'     => $request->departemen,
        ]);
        return redirect('/eas');
    }

    public function view($kodepegawai)
    {
        $mypegawai = DB::table('mypegawai')->where('kodepegawai', $kodepegawai)->get();

        return view('mypegawai.view', ['mypegawai' => $mypegawai]);
    }


}
