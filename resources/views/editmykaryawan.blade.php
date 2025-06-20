@extends('template')
@section('title', 'Edit Data Pegawai')

@section('content')

    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3>Edit Data Pegawai</h3>
            <a href="/eas" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> Kembali
            </a>
        </div>
        <div class="card-body">
            <form action="/eas/update" method="post">
                @csrf

                <div class="row mb-3">
                    <label for="nama"  class="col-sm-2 col-form-label" >Kode Pegawai</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="kodepegawai" name="kodepegawai" required value="{{$mykaryawan->namalengkap }}">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="nama"  class="col-sm-2 col-form-label" >Nama Pegawai</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="namalengkap" name="namalengkap" required value="{{$mykaryawan->namalengkap }}">
                    <div class="col-sm-10">
                </div>

                <div class="row mb-3">
                    <label for="jabatan" class="col-sm-2 col-form-label" >Divisi</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="divisi" name="divisi" required value="{{ $mykaryawan->divisi }}">

                    </div>
                </div>

                <div class="row mb-3">
                    <label for="umur">Departemen</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="departemen" name="departemen" required value="{{ $mykaryawan->departemen}}">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>

            </form>
        </div>
    </div>
@endsection
