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


                {{-- Baris untuk Kode Barang --}}
                <div class="row mb-3">
                    <label for="KodeBarang" class="col-sm-2 col-form-label">Kode Barang</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="KodeBarang" name="KodeBarang" placeholder="Masukkan kode barang..." value="{{ old('KodeBarang') }}" required>
                    </div>
                </div>

                {{-- Baris untuk Jumlah Pembelian --}}
                <div class="row mb-3">
                    <label for="Jumlah" class="col-sm-2 col-form-label">Jumlah Pembelian</label>
                    <div class="col-sm-10">
                        <input type="number"step="1" min="0" class="form-control" id="Jumlah" name="Jumlah" placeholder="Masukkan jumlah barang..." value="{{ old('Jumlah') }}" required>
                    </div>
                </div>

                {{-- Baris untuk Harga per item --}}
                <div class="row mb-3">
                    <label for="Harga" class="col-sm-2 col-form-label">Harga per item</label>
                    <div class="col-sm-10">
                        <input type="number" step="1000" min="0" class="form-control" id="Harga" name="Harga" placeholder="Masukkan harga per item..." value="{{ old('Harga') }}" required>
                    </div>
                </div>


                <hr>

                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-save"></i> Simpan ke Keranjang
                </button>
            </form>
        </div>
    </div>
@endsection
