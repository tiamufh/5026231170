<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CatDBController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
    	// $cat = DB::table('cat')->get(); //returnya array all record
    	$cat = DB::table('cat')->paginate(10);

    	// mengirim data pegawai ke view index
    	return view('indexcat',['cat' => $cat]);

    }

    public function tambahcat()
    {

        // memanggil view tambah
        return view('tambahcat');

    }

// method untuk insert data ke table pegawai
public function store(Request $request)
{
    $request->validate([
        'merk' => 'required|string|max:255',
        'harga' => 'required|integer|min:0', // Harga juga tidak boleh negatif
        'tersedia' => 'required|boolean',
        'berat' => 'required|numeric|min:0' // 'numeric' mengizinkan desimal, 'min:0' berarti nilai minimum adalah 0
    ]);
	// insert data ke table pegawai
	DB::table('cat')->insert([
		'merkcat' => $request->merk,
		'hargacat' => $request->harga,
		'tersedia' => $request->tersedia,
		'berat' => $request->berat
	]);
	// Alihkan halaman ke halaman cat
    return redirect('/cat')->with('success', 'Data berhasil ditambahkan!');

}


public function edit($id)
{
    $cat = DB::table('cat')->where('ID', $id)->first();
    return view('editcat', ['cat' => $cat]);
}

// update data cat
public function update(Request $request)
{
     // Validasi
     $request->validate([
        'merk' => 'required|string|max:255',
        'harga' => 'required|integer|min:0',
        'tersedia' => 'required|boolean',
        'berat' => 'required|numeric|min:0'
    ]);

	DB::table('cat')->where('ID',$request->id)->update([
		'merkcat' => $request->merk,
		'hargacat' => $request->harga,
		'tersedia' => $request->tersedia,
		'berat' => $request->berat
	]);

	// alihkan halaman ke halaman cat
    return redirect('/cat')->with('success', 'Data berhasil diupdate!');
}

public function hapus($id)
{
	// menghapus data pegawai berdasarkan id yang dipilih
	DB::table('cat')->where('ID',$id)->delete();

	// alihkan halaman ke halaman pegawai
	return redirect('/cat');
}

public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$cat = DB::table('cat')
		->where('merkcat','like',"%".$cari."%")
		->paginate();

    		// mengirim data pegawai ke view index
		return view('indexcat',['cat' => $cat]);

	}

}
