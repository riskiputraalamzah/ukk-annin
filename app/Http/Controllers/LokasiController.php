<?php

namespace App\Http\Controllers;

use App\Models\Lokasi;
use Illuminate\Http\Request;

class LokasiController extends Controller
{
    public function index()
    {
        $lokasi = Lokasi::all();
        return view('lokasi.index', compact('lokasi'));
    }

    public function create()
    {
        return view('lokasi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_lokasi' => 'required|max:20',
            'nama_lokasi' => 'required|max:20',
            'keterangan' => 'nullable|max:50',
        ]);

        Lokasi::create($request->all());
        return redirect()->route('lokasi.index')->with('success', 'Lokasi berhasil ditambahkan.');
    }

    public function edit(Lokasi $lokasi)
    {
        return view('lokasi.edit', compact('lokasi'));
    }

    public function update(Request $request, Lokasi $lokasi)
    {
        $request->validate([
            'kode_lokasi' => 'required|max:20',
            'nama_lokasi' => 'required|max:20',
            'keterangan' => 'nullable|max:50',
        ]);

        $lokasi->update($request->all());
        return redirect()->route('lokasi.index')->with('success', 'Lokasi berhasil diperbarui.');
    }

    public function destroy(Lokasi $lokasi)
    {
        $lokasi->delete();
        return redirect()->route('lokasi.index')->with('success', 'Lokasi berhasil dihapus.');
    }
}
