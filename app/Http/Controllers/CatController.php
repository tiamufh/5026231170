<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatController extends Controller
{
    public function index($merkcat){
        return $merkcat;
   }

    // public function formulir(){
    //     return view('formulir');
    // }



    // public function proses(Request $request){
    //     $nama = $request->input('merkcat');
    //     $alamat = $request->input('hargacat');
    //     return "Nama : ".$nama."<br> Alamat : ".$alamat ."<br> Aslinyaa : ". $request;
    // }

}
