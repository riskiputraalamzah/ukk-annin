<?php

namespace App\Http\Controllers;

use App\Models\Depresiasi;
use Illuminate\Http\Request;

class DepresiasiController extends Controller
{
    public function index()
    {
        $depresiasi = Depresiasi::all();
        return view('depresiasi.index', compact('depresiasi'));
    }

    public function create()
    {
        return view('depresiasi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'lama_depresiasi' => 'required|integer',
            'keterangan' => 'nullable|max:50',
        ]);

        Depresiasi::create($request->all());
        return redirect()->route('depresiasi.index')->with('success', 'Depresiasi berhasil ditambahkan.');
    }

    public function edit(Depresiasi $depresiasi)
    {
        return view('depresiasi.edit', compact('depresiasi'));
    }

    public function update(Request $request, Depresiasi $depresiasi)
    {
        $request->validate([
            'lama_depresiasi' => 'required|integer',
            'keterangan' => 'nullable|max:50',
        ]);

        $depresiasi->update($request->all());
        return redirect()->route('depresiasi.index')->with('success', 'Depresiasi berhasil diperbarui.');
    }

    public function destroy(Depresiasi $depresiasi)
    {
        $depresiasi->delete();
        return redirect()->route('depresiasi.index')->with('success', 'Depresiasi berhasil dihapus.');
    }
}
