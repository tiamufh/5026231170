@extends('template')

@section('title', 'Data Karyawan')

@section('content')
<div class="card">
    <div class="card-header">
        <h3>Data Karyawan</h3>
    </div>
    <div class="card-body">
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead class="table-dark text-center">
                    <tr>
                        <th>Kode Pegawai</th>
                        <th>Nama Lengkap</th>
                        <th>Divisi</th>
                        <th>Departemen</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($karyawan as $k)
                        <tr>
                            <td class="text-center">{{ $k->kodepegawai }}</td>
                            {{-- Nama Lengkap menjadi huruf kapital semua --}}
                            <td>{{ strtoupper($k->namalengkap) }}</td>
                            <td class="text-center">{{ $k->divisi }}</td>
                            {{-- Departemen menjadi huruf kecil semua (Sesuai soal, meskipun tipenya Integer) --}}
                            <td class="text-center">{{ strtolower($k->departemen) }}</td>
                            <td class="text-center">
                                <a href="/karyawan/hapus/{{ $k->kodepegawai }}" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin ingin menghapus data ini?')">
                                    Hapus Data
                                </a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center">Tidak ada data.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <hr>
        {{-- Tombol Tambah Data terletak di bawah tabel --}}
        <a href="/karyawan/tambah" class="btn btn-primary">Tambah Data</a>
        <div class="d-flex justify-content-center mt-4">
            {{ $karyawan->links() }}
        </div>
    </div>
</div>
@endsection
