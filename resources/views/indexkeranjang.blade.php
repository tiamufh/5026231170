@extends('template')

@section('title', 'Keranjang Belanja')

@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3>Keranjang Belanja</h3>
            {{-- Tombol "Beli" akan menjadi tombol utama untuk menambah data baru --}}
            <a href="/keranjang/tambah" class="btn btn-primary">
                <i class="fas fa-shopping-cart"></i> Beli Barang Baru
            </a>
        </div>
        <div class="card-body">
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead class="table-dark text-center">
                        <tr>
                            <th>Kode Pembelian</th>
                            <th>Kode Barang</th>
                            <th>Jumlah Pembelian</th>
                            <th>Harga per item</th>
                            <th>Total</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- Ganti variabel $cat menjadi $keranjang --}}
                        @forelse($keranjang as $item)
                            <tr>
                                <td class="text-center">{{ $item->ID }}</td>
                                <td class="text-center">{{ $item->KodeBarang }}</td>
                                <td class="text-center">{{ $item->Jumlah }}</td>
                                {{-- Harga diformat dengan pemisah ribuan --}}
                                <td class="text-end">Rp {{ number_format($item->Harga, 0, ',', '.') }}</td>
                                {{-- Total dihitung (Jumlah x Harga) dan diformat --}}
                                <td class="text-end">Rp {{ number_format($item->Jumlah * $item->Harga, 0, ',', '.') }}</td>
                                <td class="text-center">
                                    {{-- Tombol Tambah/Beli (disesuaikan dengan alur tugas) --}}
                                    <a href="/keranjang/tambah" class="btn btn-success btn-sm">
                                        <i class="fas fa-plus"></i> Beli
                                    </a>
                                    {{-- Tombol Batal/Hapus --}}
                                    <a href="/keranjang/hapus/{{ $item->ID }}" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin ingin membatalkan pembelian ini?')">
                                        <i class="fas fa-times"></i> Batal
                                    </a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center">
                                    <div class="alert alert-warning">
                                        Keranjang belanja masih kosong.
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            {{-- Informasi dan Tombol Paginasi --}}
            <div class="mt-4">
                <div class="pagination-info text-center text-muted mb-2">
                    Menampilkan <strong>{{ $keranjang->firstItem() }}</strong> - <strong>{{ $keranjang->lastItem() }}</strong> dari <strong>{{ $keranjang->total() }}</strong> data
                </div>
                <div class="d-flex justify-content-center">
                    {{-- Ganti variabel $cat menjadi $keranjang --}}
                    {{ $keranjang->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
