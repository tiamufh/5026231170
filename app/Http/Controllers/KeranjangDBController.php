<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KeranjangDBController extends Controller
{
    public function index()
    {
    	$keranjang = DB::table('keranjangbelanja')->get();
    	return view('indexkeranjang',['keranjang' => $keranjang]);

    }


    public function tambah()
    {
        return view('tambahkeranjang');
    }

    public function store(Request $request)
    {
        // 1. Validasi input
        $request->validate([
            'KodeBarang' => 'required|numeric',
            'Jumlah'     => 'required|numeric|min:1',
            'Harga'      => 'required|numeric|min:0',
        ]);

        // 2. Simpan data ke tabel
        DB::table('keranjang_belanja')->insert([
            'KodeBarang' => $request->KodeBarang,
            'Jumlah'     => $request->Jumlah,
            'Harga'      => $request->Harga,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

         // 3. Redirect kembali ke halaman index dengan pesan sukses
         return redirect('/keranjang')->with('success', 'Barang berhasil ditambahkan!');
        }


    public function hapus($id)
    {
        // 1. Cari dan hapus data dari tabel 'keranjang_belanja'
        //    berdasarkan ID yang dikirim dari route.
        DB::table('keranjangbelanja')->where('ID', $id)->delete();

        // 2. Redirect kembali ke halaman index dengan pesan sukses
        return redirect('/keranjang')->with('success', 'Barang berhasil dibatalkan dari keranjang!');
    }

}
