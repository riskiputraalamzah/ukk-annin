@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h4>Edit Depresiasi</h4>
    <form action="{{ route('depresiasi.update', $depresiasi->id_depresiasi) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label>Lama Depresiasi (tahun)</label>
            <input type="number" name="lama_depresiasi" class="form-control" value="{{ $depresiasi->lama_depresiasi }}" required>
        </div>
        <div class="mb-3">
            <label>Keterangan</label>
            <input type="text" name="keterangan" class="form-control" value="{{ $depresiasi->keterangan }}" maxlength="50">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('depresiasi.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
