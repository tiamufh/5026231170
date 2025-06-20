<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MyKaryawanController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
    	$mykaryawan = DB::table('mykaryawan')->get();

    	// mengirim data pegawai ke view index
    	return view('indexmykaryawan',['mykaryawan' => $mykaryawan]);

    }



// method untuk edit data pegawai
public function edit($kodepegawai) //gapake request karena ada primary key
{
    $mykaryawan = DB::table('mykaryawan')->where('kodepegawai', $kodepegawai)->first();
    return view('editmykaryawan', ['mykaryawan' => $mykaryawan]);
}


// update data pegawai
public function update(Request $request)
{
	// update data pegawai
	DB::table('mykaryawan')->where('kodepegawai',$request->kodepegawai)->update([
		'kodepegawai' => $request->kodepegawai,
		'namalengkap' => $request->namalengkap,
		'divisi' => $request->divisi,
		'departemen' => $request->departemen
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/eas');
}


public function view($kodepegawai)
{

    $mykaryawan = DB::table('mykaryawan')->where('kodepegawai', $kodepegawai)->first();
    return view('viewmykaryawan', ['mykaryawan' => $mykaryawan]);
}


}
