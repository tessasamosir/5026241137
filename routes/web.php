<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PegawaiDBController;
use App\Http\Controllers\UnggasDbController;
use App\Http\Controllers\E5DbController;
use App\Http\Controllers\D4DbController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\mypegawaiDbController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function () {
	return "<h1> Halo, Selamat datang </h1> di tutorial laravel <b>www.malasngoding.com</b>";
});

Route::get('blog', function () {
	return view('blog');
});

Route::get('pert5', function () {
	return view('pertemuan5');
});

Route::get('intro', function () {
	return view('intro');
});

Route::get('news', function () {
	return view('news');
});

Route::get('responsive', function () {
	return view('responsive');
});

Route::get('contoh', function () {
	return view('contoh');
});

Route::get('5026241137', function () {
	return view('5026241137');
});

Route::get('index', function () {
	return view('index');
});

Route::get('linktree', function () {
	return view('linktree');
});

Route::get('dosen', [DosenController::class, 'index']);

Route::get('biodata', [DosenController::class, 'biodata']);

Route::get('/pegawainama/{nama}', [PegawaiController::class, 'index']);
Route::get('/formulir', [PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);

//blog
Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);

// CRUD Tabel Pegawai
Route::get('/pegawai', [PegawaiDBController::class, 'index']);
Route::get('/pegawai/tambah', [PegawaiDBController::class, 'tambah']);
Route::post('/pegawai/store', [PegawaiDBController::class, 'store']);
Route::get('/pegawai/edit/{id}', [PegawaiDBController::class, 'edit']);
Route::post('/pegawai/update', [PegawaiDBController::class, 'update']);
Route::get('/pegawai/hapus/{id}', [PegawaiDBController::class, 'hapus']);
Route::get('/pegawai/cari', [PegawaiDBController::class, 'cari']);

Route::get('/unggas', [UnggasDbController::class, 'index']);
Route::get('/unggas/tambah', [UnggasDbController::class, 'tambah']);
Route::post('/unggas/store', [UnggasDbController::class, 'store']);
Route::get('/unggas/edit/{id}', [UnggasDbController::class, 'edit']);
Route::post('/unggas/update', [UnggasDbController::class, 'update']);
Route::get('/unggas/hapus/{id}', [UnggasDbController::class, 'hapus']);
Route::get('/unggas/cari', [UnggasDbController::class, 'cari']);

Route::get('/E5', [E5DbController::class, 'index']);
Route::get('/E5/tambah', [E5DbController::class, 'tambah']);
Route::post('/E5/store', [E5DbController::class, 'store']);

Route::get('/D4', [D4DbController::class, 'index']);
Route::get('/D4/beli', [D4DbController::class, 'beli']);
Route::post('/D4/store', [D4DbController::class, 'store']);
Route::get('/D4/batal/{id}', [D4DbController::class, 'hapus']);

Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');
Route::get('/siswa/create', [SiswaController::class, 'create'])->name('siswa.create');
Route::post('/siswa', [SiswaController::class, 'store'])->name('siswa.store');
Route::get('/siswa/{nrp}/edit', [SiswaController::class, 'edit'])->name('siswa.edit');
Route::put('/siswa/{nrp}', [SiswaController::class, 'update'])->name('siswa.update');
Route::delete('/siswa/{nrp}', [SiswaController::class, 'destroy'])->name('siswa.destroy');

Route::get('/eas', [mypegawaiDbController::class, 'index']);
Route::get('/eas/tambah', [mypegawaiDbController::class, 'tambah']);
Route::post('/eas/store', [mypegawaiDbController::class, 'store']);
Route::get('/eas/view/{kodepegawai}', [mypegawaiDbController::class, 'view']);
