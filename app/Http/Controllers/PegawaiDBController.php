<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PegawaiDBController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
    	// $pegawai = DB::table('pegawai')->get(); //returnya array all record
    	$pegawai = DB::table('pegawai')->paginate(10);

    	// mengirim data pegawai ke view index
    	return view('indexpegawai',['pegawai' => $pegawai]);

    }

    public function tambah()
{

	// memanggil view tambah
	return view('tambah');

}
// method untuk insert data ke table pegawai
public function store(Request $request)
{
	// insert data ke table pegawai
	DB::table('pegawai')->insert([
		'pegawai_nama' => $request->nama,
		'pegawai_jabatan' => $request->jabatan,
		'pegawai_umur' => $request->umur,
		'pegawai_alamat' => $request->alamat
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/pegawai');

}
// method untuk edit data pegawai
public function edit($id) //gapake request karena ada primary key
{
    $pegawai = DB::table('pegawai')->where('pegawai_id', $id)->first();
    return view('edit', ['pegawai' => $pegawai]);
}



// update data pegawai
public function update(Request $request)
{
	// update data pegawai
	DB::table('pegawai')->where('pegawai_id',$request->id)->update([
		'pegawai_nama' => $request->nama,
		'pegawai_jabatan' => $request->jabatan,
		'pegawai_umur' => $request->umur,
		'pegawai_alamat' => $request->alamat
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/pegawai');
}

// method untuk hapus data pegawai
public function hapus($id)
{
	// menghapus data pegawai berdasarkan id yang dipilih
	DB::table('pegawai')->where('pegawai_id',$id)->delete();

	// alihkan halaman ke halaman pegawai
	return redirect('/pegawai');
}

public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$pegawai = DB::table('pegawai')
		->where('pegawai_nama','like',"%".$cari."%")
		->paginate();

    		// mengirim data pegawai ke view index
		return view('indexpegawai',['pegawai' => $pegawai]);

	}

}
