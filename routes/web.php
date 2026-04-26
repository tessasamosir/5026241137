<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;

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
