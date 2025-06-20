<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Coba;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PegawaiDBController;
use App\Http\Controllers\CatDBController;
use App\Http\Controllers\KeranjangDBController;
use App\Http\Controllers\CounterController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\MyKaryawanController;

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

// Route::get('/', function () {
//     return view('welcome');
// });


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

Route::get('frontend', function () {
    return view('frontend');
});

Route::get('dosen', [Coba::class,'index']);

// Route::get('/pegawai/{nama}', [PegawaiController::class,'index']);

Route::get('/formulir', [PegawaiController::class,'formulir']); //halaman isian form
Route::post('/formulir/proses', [PegawaiController::class,'proses']); //action form

// route blog
Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);

Route::get('/pegawai', [PegawaiDBController::class,'index']);

Route::get('/pegawai/tambah', [PegawaiDBController::class,'tambah']);

Route::post('/pegawai/store', [PegawaiDBController::class,'store']);

Route::get('/pegawai/edit/{id}', [PegawaiDBController::class,'edit']);


Route::post('/pegawai/update',[PegawaiDBController::class,'update']);

Route::get('/pegawai/hapus/{id}',[PegawaiDBController::class,'hapus']);

Route::get('/pegawai/cari',[PegawaiDBController::class,'cari']);



// // ROUTE CAT
Route::get('/cat', [CatDBController::class,'index']);

Route::get('/cat/tambah', [CatDBController::class,'tambahcat']);

Route::post('/cat/store', [CatDBController::class,'store']);

Route::get('/cat/edit/{id}', [CatDBController::class,'edit']);

Route::post('/cat/update', [CatDBController::class, 'update']);

Route::get('/cat/hapus/{id}',[CatDBController::class,'hapus']);

Route::get('/cat/cari',[CatDBController::class,'cari']);

// ROUTE IDEX KERANJANG
Route::get('/keranjang', [KeranjangDBController::class,'index']);
Route::get('/keranjang/tambah', [KeranjangDBController::class,'tambah']);
Route::get('/keranjang/hapus/{id}', [KeranjangDBController::class, 'hapus']);


Route::get('/', [CounterController::class, 'index']);

Route::get('/karyawan', [KaryawanController::class, 'index']);
Route::get('/karyawan/tambah', [KaryawanController::class, 'tambah']);
Route::get('/karyawan/hapus/{kodepegawai}', [KaryawanController::class, 'hapus']);
Route::get('/karyawan/cari', [KaryawanController::class, 'cari']);
Route::post('/karyawan/store', [KaryawanController::class,'store']);


//ROUTE EAS
Route::get('/eas', [MyKaryawanController::class, 'index']);
Route::get('/eas/edit/{kodepegawai}', [MyKaryawanController::class, 'edit']);
Route::get('/eas/view/{kodepegawai}', [MyKaryawanController::class, 'view']);
Route::post('/eas/update', [MyKaryawanController::class, 'update']);

