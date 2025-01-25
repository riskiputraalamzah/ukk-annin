@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="d-flex justify-content-between mb-3">
        <h4>Daftar Depresiasi</h4>
        <a href="{{ route('depresiasi.create') }}" class="btn btn-primary">Tambah Depresiasi</a>
    </div>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Lama Depresiasi</th>
                <th>Keterangan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($depresiasi as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->lama_depresiasi }}</td>
                    <td>{{ $item->keterangan }}</td>
                    <td>
                        <a href="{{ route('depresiasi.edit', $item->id_depresiasi) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('depresiasi.destroy', $item->id_depresiasi) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
