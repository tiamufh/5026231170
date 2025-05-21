<!-- Menghubungkan dengan view template master -->
@extends('blog/master')

<!-- isi bagian judul halaman -->
@section('title', 'Halaman blog')
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Halaman Home')


<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')

	<p>Ini Adalah Halaman Home</p>
	<p>Selamat datang !</p>

@endsection

@section('footer')
<i class="fa fa-copyright" aria-hidden="true">copy right by Tahiyyah Mufhimah </i>

@endsection
