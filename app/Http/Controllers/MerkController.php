<?php

namespace App\Http\Controllers;

use App\Models\Merk;
use Illuminate\Http\Request;

class MerkController extends Controller
{
    public function index()
    {
        $merks = Merk::all();
        return view('merk.index', compact('merks'));
    }

    public function create()
    {
        return view('merk.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'merk' => 'required|max:50',
            'keterangan' => 'nullable|max:50',
        ]);

        Merk::create($request->all());
        return redirect()->route('merk.index')->with('success', 'Merk berhasil ditambahkan.');
    }

    public function edit(Merk $merk)
    {
        return view('merk.edit', compact('merk'));
    }

    public function update(Request $request, Merk $merk)
    {
        $request->validate([
            'merk' => 'required|max:50',
            'keterangan' => 'nullable|max:50',
        ]);

        $merk->update($request->all());
        return redirect()->route('merk.index')->with('success', 'Merk berhasil diperbarui.');
    }

    public function destroy(Merk $merk)
    {
        $merk->delete();
        return redirect()->route('merk.index')->with('success', 'Merk berhasil dihapus.');
    }
}
