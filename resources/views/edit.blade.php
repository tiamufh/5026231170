@extends('template')
@section('title', 'Edit Data Pegawai')

@section('content')

    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3>Edit Data Pegawai</h3>
            <a href="/pegawai" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> Kembali
            </a>
        </div>
        <div class="card-body">
            <form action="/pegawai/update" method="post">
                @csrf

                {{-- ID pegawai yang akan diupdate --}}
                <input type="hidden" name="id" value="{{ $pegawai->pegawai_id }}">
                <div class="form-group">
                    <label for="nama">Nama Pegawai</label>

                    <input type="text" class="form-control" id="nama" name="nama" required value="{{ $pegawai->pegawai_nama }}">
                </div>

                <div class="form-group">
                    <label for="jabatan">Jabatan</label>
                    <input type="text" class="form-control" id="jabatan" name="jabatan" required value="{{ $pegawai->pegawai_jabatan }}">
                </div>

                <div class="form-group">
                    <label for="umur">Umur</label>
                    <input type="number" class="form-control" id="umur" name="umur" required min="17" value="{{ $pegawai->pegawai_umur }}">
                </div>

                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea class="form-control" id="alamat" name="alamat" required rows="4">{{ $pegawai->pegawai_alamat }}</textarea>
                </div>

                <hr>

                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-save"></i> Simpan Perubahan
                </button>

            </form>
        </div>
    </div>
@endsection
