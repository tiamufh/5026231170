@extends('template')

@section('content')
	<h3>Data Cat</h3>

    @if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif



	<div class="d-flex justify-content-between align-items-center mb-3">
        <form action="/cat/cari" method="GET" class="d-flex">
            <input type="text" class="form-control me-2" name="cari" placeholder="Cari Merk Cat..." value="{{ request('cari') }}">
            <button type="submit" class="btn btn-info">CARI</button>
        </form>
        <a href="/cat/tambah" class="btn btn-primary">+ Tambah Cat Baru</a>

    </div>

    @if($cat->count() > 0)
	<table class="table table-striped table-hover">
		<tr>
			<th class="text-center">ID</th>
			<th class="text-center">Merk Cat</th>
			<th class="text-center">Harga</th>
			<th class="text-center">Ketersediaan</th>
			<th class="text-center">Berat</th>
            <th class="text-center"> Opsi </th>
		</tr>
		@foreach($cat as $c)
		<tr>
            <td class="text-center">{{ $c->ID }}</td>
			<td class="text-center">{{ $c->merkcat }}</td>
			<td class="text-center">Rp {{ number_format($c->hargacat, 0, ',', '.') }}</td>
            <td class="text-center">
                @if($c->tersedia == 1)
                   Tersedia
                @else
                    <span class="badge bg-danger">Habis</span>
                @endif
            </td>
			<td class="text-center">{{ $c->berat }} kg</td>
			<td class="text-center">
                {{-- Tombol Edit --}}
                <a href="/cat/edit/{{ $c->ID }}" class="btn btn-success btn-sm"><i class="fas fa-pencil-alt"></i> Edit</a>

                {{-- Tombol Hapus --}}
                <a href="/cat/hapus/{{ $c->ID }}" class="btn btn-danger btn-sm" onclick="..."><i class="fas fa-trash"></i> Hapus</a>
            </td>
		</tr>
		@endforeach
	</table>
    @else
    <div class="alert alert-warning text-center">
        <h4>Data Tidak Ditemukan</h4>
        <p>Tidak ada data yang cocok dengan pencarian Anda.</p>
    </div>
    @endif

    <br/>
	<div class="mt-4">
        <div class="pagination-info text-center text-muted mb-2">
            Menampilkan <strong>{{ $cat->firstItem() }}</strong> - <strong>{{ $cat->lastItem() }}</strong> dari <strong>{{ $cat->total() }}</strong> data
        </div>
        <div class="d-flex justify-content-center">
            {{ $cat->links() }}
        </div>
    </div>


@endsection
