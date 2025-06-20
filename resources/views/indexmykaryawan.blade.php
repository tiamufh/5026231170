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
                    @foreach ($mykaryawan as $k)
                        <tr>
                            <td class="text-center">{{ $k->kodepegawai }}</td>
                            <td>{{ Str::title($k->namalengkap) }}</td>
                            <td class="text-center">{{ $k->divisi }}</td>
                            <td class="text-center">{{$k->departemen}}</td>
                            <td class="text-center">
                                <a href="/eas/edit/{{ $k->kodepegawai}}" class="btn btn-success btn-sm"><i class="fas fa-pencil-alt"></i> Edit</a>
                                {{-- Tombol View mengarah ke /mahasiswa/view/{NRP} --}}
                              <a href="/eas/view/{{ $k->kodepegawai}}" class="btn btn-info btn-sm">View</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
