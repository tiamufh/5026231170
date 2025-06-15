@extends('template')

@section('title', 'Tambah Data Karyawan')

@section('content')
<div class="card">
    <div class="card-header">
        <h3>Tambah Data Karyawan</h3>
    </div>
    <div class="card-body">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="/karyawan/store" method="post" class="form-horizontal">
            @csrf

            <div class="form-group row">
                <label for="kodepegawai" class="col-sm-2 col-form-label">Kode Pegawai</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="kodepegawai" name="kodepegawai" placeholder="Contoh: KV006" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="namalengkap" class="col-sm-2 col-form-label">Nama Lengkap</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="namalengkap" name="namalengkap" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="divisi" class="col-sm-2 col-form-label">Divisi</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="divisi" name="divisi" placeholder="Contoh: SALE" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="departemen" class="col-sm-2 col-form-label">Departemen</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="departemen" name="departemen" placeholder="Contoh: 501" required>
                </div>
            </div>

            <hr>

            <div class="form-group row">
                <div class="col-sm-10 offset-sm-2">
                    <button type="submit" class="btn btn-primary">SIMPAN</button>
                    <a href="/karyawan" class="btn btn-secondary">Kembali</a>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
