<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UnggasDbController extends Controller
{
    public function index()
    {
        // mengambil data dari table unggas
        $unggas = DB::table('unggas')->get();

        // mengirim data unggas ke view index
        return view('index3', ['unggas' => $unggas]);
    }

    // method untuk menampilkan view form tambah unggas
    public function tambah()
    {
        // memanggil view tambah
        return view('tambahunggas');
    }

    // method untuk insert data ke table unggas
    public function store(Request $request)
    {
        // insert data ke table unggas
        DB::table('unggas')->insert([
            'namaunggas'   => $request->namaunggas,
            'jumlahunggas' => $request->jumlahunggas,
            'tersedia'     => $request->tersedia,
        ]);
        // alihkan halaman ke halaman unggas
        return redirect('/unggas');
    }

    // method untuk edit data unggas
    public function edit($id)
    {
        // mengambil data unggas berdasarkan id yang dipilih
        $unggas = DB::table('unggas')->where('kodeunggas', $id)->get();
        // passing data unggas yang didapat ke view edit
        return view('editunggas', ['unggas' => $unggas]);
    }

    // update data unggas
    public function update(Request $request)
    {
        // update data unggas
        DB::table('unggas')->where('kodeunggas', $request->id)->update([
            'namaunggas'   => $request->namaunggas,
            'jumlahunggas' => $request->jumlahunggas,
            'tersedia'     => $request->tersedia,
        ]);
        // alihkan halaman ke halaman unggas
        return redirect('/unggas');
    }

    // method untuk hapus data unggas
    public function hapus($id)
    {
        // menghapus data unggas berdasarkan id yang dipilih
        DB::table('unggas')->where('kodeunggas', $id)->delete();

        // alihkan halaman ke halaman unggas
        return redirect('/unggas');
    }

    public function cari(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;

        // mengambil data dari table unggas sesuai pencarian data
        $unggas = DB::table('unggas')
            ->where('namaunggas', 'like', "%" . $cari . "%")
            ->paginate();

        // mengirim data unggas ke view index
        return view('index3', ['unggas' => $unggas]);
    }
}
