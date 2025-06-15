@extends('template')

@section('title', 'Beli Barang Baru')

@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3>Beli Barang (Tambah Data ke Keranjang)</h3>
            <a href="/keranjang" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> Kembali
            </a>
        </div>
        <div class="card-body">

            {{-- Menampilkan error validasi jika ada --}}
            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Oops!</strong> Terjadi beberapa masalah dengan input Anda.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="/keranjang/store" method="post">
                @csrf

                <div class="form-group">
                    <label for="KodeBarang">Kode Barang</label>
                    <input type="text" class="form-control" id="KodeBarang" name="KodeBarang" placeholder="Masukkan kode barang..." value="{{ old('KodeBarang') }}" required>
                </div>

                <div class="form-group">
                    <label for="Jumlah">Jumlah Pembelian</label>
                    <input type="text" class="form-control" id="Jumlah" name="Jumlah" placeholder="Masukkan jumlah barang..." value="{{ old('Jumlah') }}" required>
                </div>

                <div class="form-group">
                    <label for="Harga">Harga per item</label>
                    <input type="text" class="form-control" id="Harga" name="Harga" placeholder="Masukkan harga per item..." value="{{ old('Harga') }}" required>
                </div>

                <hr>

                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-save"></i> Simpan ke Keranjang
                </button>
            </form>
        </div>
    </div>
@endsection
