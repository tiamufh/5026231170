@extends('template')

@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3>Tambah Data Cat Baru</h3>
            <a href="/cat" class="btn btn-secondary">Kembali</a>
        </div>
        <div class="card-body">
            <form action="/cat/store" method="post">
                {{-- Token CSRF wajib ada --}}
                @csrf
                <div class="form-group">
                    <label for="merk">Merk Cat</label>
                    <input type="text" class="form-control" id="merk" name="merk" placeholder="Masukkan merk cat..." required>
                </div>

                <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="number" step="1000" min="0" class="form-control" id="harga" name="harga" placeholder="Masukkan harga dalam rupiah..." required>
                </div>

                <div class="form-group">
                    <label for="ketersediaan">Ketersediaan</label>
                    <select class="form-control" id="ketersediaan" name="tersedia" required>
                        <option value="">-- Pilih Status --</option>
                        <option value="1">Tersedia</option>
                        <option value="0">Habis</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="berat">Berat (kg)</label>
                    <input type="number" step="0.1" min="0" class="form-control" id="berat" name="berat" placeholder="Masukkan berat cat dalam format kg..." required>
                </div>

                <hr>

                <button type="submit" class="btn btn-primary">Simpan Data</button>

            </form>
        </div>
    </div>
@endsection
