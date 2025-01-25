@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h4>Tambah Hitung Depresiasi</h4>
    <form action="{{ route('hitung-depresiasi.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Pengadaan</label>
            <select name="id_pengadaan" class="form-control" required>
                <option value="">-- Pilih Pengadaan --</option>
                @foreach($pengadaan as $item)
                    <option value="{{ $item->id_pengadaan }}">{{ $item->kode_pengadaan }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label>Tanggal Hitung Depresiasi</label>
            <input type="date" name="tgl_hitung_depresiasi" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Bulan</label>
            <input type="text" name="bulan" class="form-control" required maxlength="10">
        </div>
        <div class="mb-3">
            <label>Durasi</label>
            <input type="number" name="durasi" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Nilai Barang</label>
            <input type="number" name="nilai_barang" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('hitung-depresiasi.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
