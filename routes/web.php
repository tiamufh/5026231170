<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Coba;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('halo', function () {
	return "<h1>Halo, Selamat datang di tutorial laravel www.malasngoding.com<h1>";
});

Route::get('blog', function () {
	return view('blog');
});

Route::get('hello', [Coba::class,'helloword']);

Route::get('1berita', function () {
    return view('latihan');
});

Route::get('2.1tugasvidio', function () {
    return view('tugsdvidio');
});

Route::get('2.2tugasvidio', function () {
    return view('imagecentering');
});

Route::get('3bootstrap', function () {
    return view('bootstrap2');
});

Route::get('4itstv', function () {
    return view('kode7');
});

Route::get('5linktree', function () {
    return view('index');
});

Route::get('6js', function () {
    return view('js');
});

Route::get('7ets', function () {
    return view('index2');
});

Route::get('8danantara', function () {
    return view('danantara');
});

Route::get('9link', function () {
    return view('frontend');
});

Route::get('dosen', [Coba::class,'index']);

Route::get('/pegawai/{nama}', [PegawaiController::class,'index']);

Route::get('/formulir', [PegawaiController::class,'formulir']); //halaman isian form
Route::post('/formulir/proses', [PegawaiController::class,'proses']); //action form

// route blog
Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);
