<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CounterController extends Controller
{
    public function index()
    {
        // --- INI ADALAH LOGIKA UTAMA SESUAI SOAL ---

        // 1. Lakukan UPDATE terlebih dahulu: Tambah (increment) field 'Jumlah' sebanyak 1.
        // Kita targetkan baris data dimana ID = 1.
        DB::table('pagecounter')->where('ID', 1)->increment('Jumlah');

        // 2. Setelah di-increment, BACA (SELECT) nilainya yang terbaru.
        $counter = DB::table('pagecounter')->where('ID', 1)->first();

        // 3. Ambil hanya nilai dari kolom 'Jumlah'.
        $jumlahPengunjung = $counter->Jumlah;

        // 4. Kirim data jumlah pengunjung ke view.
        return view('indexcounter', ['jumlahPengunjung' => $jumlahPengunjung]);

    }


}
