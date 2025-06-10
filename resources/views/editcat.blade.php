@extends('template')

@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3>Edit Data Cat</h3>
            <a href="/cat" class="btn btn-secondary">Kembali</a>
        </div>
        <div class="card-body">
            <form action="/cat/update" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{ $cat->ID }}">

                <div class="form-group">
                    <label for="merk">Merk Cat</label>
                    <input type="text" class="form-control" id="merk" name="merk" required value="{{ $cat->merkcat }}">
                </div>

                <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="number" class="form-control" id="harga" name="harga" required min="0" value="{{ $cat->hargacat }}">
                </div>

                <div class="form-group">
                    <label for="ketersediaan">Ketersediaan</label>
                    <select class="form-control" id="ketersediaan" name="tersedia" required>
                        <option value="">-- Pilih Status --</option>
                        <option value="1" {{ $cat->tersedia == 1 ? 'selected' : '' }}>Tersedia</option>
                        <option value="0" {{ $cat->tersedia == 0 ? 'selected' : '' }}>Habis</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="berat">Berat (kg)</label>
                    <input type="number" step="0.1" class="form-control" id="berat" name="berat" required min="0" value="{{ $cat->berat }}">
                </div>

                <hr>

                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            </form>
        </div>
    </div>
@endsection
