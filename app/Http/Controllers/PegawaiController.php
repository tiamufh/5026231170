<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PegawaiController extends Controller
{
    public function index($nama){
        return $nama;
   }

    public function formulir(){
        return view('formulir');
    }



    public function proses(Request $request){
        $nama = $request->input('nama');
        $alamat = $request->input('alamat');
        return "Nama : ".$nama."<br> Alamat : ".$alamat ."<br> Aslinyaa : ". $request;
    }

    // public function proses(Request $request)
    // {
    //     $this->validate($request,[
    //        'nama' => 'required|min:5|max:20',
    //        'pekerjaan' => 'required',
    //        'usia' => 'required|numeric'
    //     ]);

    //     return view('proses',['data' => $request]);
    // }




}
