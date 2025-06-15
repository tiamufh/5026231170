@extends('template')

@section('title', 'Page Counter')

@section('content')
    <div class="card text-center">
        <div class="card-header">
            <h3>Selamat Datang!</h3>
        </div>
        <div class="card-body" style="padding: 4rem;">

            {{-- Box hijau untuk menampilkan jumlah pengunjung --}}
            <div class="alert alert-success" role="alert" style="font-size: 1.5rem; font-weight: bold;">
                Anda Pengunjung ke: {{ $jumlahPengunjung }}
            </div>

            <p class="text-muted mt-3">
                Angka di atas akan bertambah 1 setiap kali halaman ini di-refresh.
            </p>

        </div>
        <div class="card-footer text-muted">
            Page Counter
        </div>
    </div>
@endsection
