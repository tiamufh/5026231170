@extends('template')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3>Detail Pegawai (Read Only)</h3>
        </div>
        <div class="card-body">
            <div class="mb-3">
                <label class="form-label"><strong>Kode Pegawai:</strong></label>
                <p>{{ $mykaryawan->kodepegawai }}</p>
            </div>
            <hr>
            <div class="mb-3">
                <label class="form-label"><strong>Nama Lengkap:</strong></label>
                <p>{{ $mykaryawan->namalengkap }}</p>
            </div>
            <hr>
            <div class="mb-3">
                <label class="form-label"><strong>Divisi:</strong></label>
                <p>{{ $mykaryawan->divisi }}</p>
            </div>
            <hr>
            <div class="mb-3">
                <label class="form-label"><strong>Departemen:</strong></label>
                <p>{{ $mykaryawan->departemen }}</p>
            </div>
        </div>
        <div class="card-footer">
            {{-- Tombol untuk kembali ke halaman utama/index --}}
            <a href="/eas" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
@endsection
