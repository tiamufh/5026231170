<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KaryawanController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
    	$karyawan = DB::table('karyawan')->paginate(10);

    	// mengirim data pegawai ke view index
    	return view('indexkaryawan',['karyawan' => $karyawan]);

    }

    public function tambah()
{

	// memanggil view tambah
	return view('tambahkaryawan');

}
// method untuk insert data ke table pegawai
public function store(Request $request)
{
    $request->validate([
        'kodepegawai' => 'required|size:5|unique:karyawan,kodepegawai',
        'namalengkap' => 'required|max:50',
        'divisi'      => 'required|size:5',
        'departemen'  => 'required|integer',
    ]);

    DB::table('karyawan')->insert([
        'kodepegawai' => $request->kodepegawai,
        'namalengkap' => $request->namalengkap,
        'divisi'      => $request->divisi,
        'departemen'  => $request->departemen,
    ]);

    return redirect('/karyawan')->with('success', 'Data karyawan berhasil disimpan!');
}
// method untuk hapus data pegawai
public function hapus($kodepegawai)
{
    DB::table('karyawan')->where('kodepegawai', $kodepegawai)->delete();
    return redirect('/karyawan')->with('success', 'Data karyawan berhasil dihapus!');
}

public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$pegawai = DB::table('karyawan')
		->where('namalengkap','like',"%".$cari."%")
		->paginate();

    		// mengirim data pegawai ke view index
		return view('indexkaryawan',['karyawan' => $karyawan]);

	}

}
