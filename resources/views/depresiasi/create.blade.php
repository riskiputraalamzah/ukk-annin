@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h4>Tambah Depresiasi</h4>
    <form action="{{ route('depresiasi.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Lama Depresiasi (tahun)</label>
            <input type="number" name="lama_depresiasi" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Keterangan</label>
            <input type="text" name="keterangan" class="form-control" maxlength="50">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('depresiasi.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
