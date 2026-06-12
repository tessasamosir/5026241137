<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class D4DbController extends Controller
{
    public function index()
    {
    $keranjangbelanja = DB::table('keranjangbelanja')->get();

    foreach ($keranjangbelanja as $n) {

        $n->Total = $n->Jumlah * $n->Harga;
    }

    return view('keranjangbelanja.index', ['keranjangbelanja' => $keranjangbelanja]);
}

    public function beli()
    {
        return view('keranjangbelanja.beli');
    }

    public function store(Request $request)
    {
        // insert data ke table unggas
        DB::table('keranjangbelanja')->insert([
            'KodeBarang'   => $request->KodeBarang,
            'Jumlah' => $request->Jumlah,
            'Harga'     => $request->Harga,
        ]);
        return redirect('/D4');
    }

    // update data unggas
    public function update(Request $request)
    {
        DB::table('keranjangbelanja')->where('KodePembelian', $request->id)->update([
            'KodeBarang'   => $request->KodeBarang,
            'Jumlah' => $request->Jumlah,
            'Harga'     => $request->Harga,
        ]);
        // alihkan halaman ke halaman unggas
        return redirect('/D4');
    }

    public function hapus($id)
    {
        // menghapus data unggas berdasarkan id yang dipilih
        DB::table('keranjangbelanja')->where('ID', $id)->delete();

        // alihkan halaman ke halaman unggas
        return redirect('/D4');
    }

}
