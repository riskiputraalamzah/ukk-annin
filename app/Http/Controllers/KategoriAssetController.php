<?php

namespace App\Http\Controllers;

use App\Models\KategoriAsset;
use Illuminate\Http\Request;

class KategoriAssetController extends Controller
{
    public function index()
    {
        $kategoriAssets = KategoriAsset::all();
        return view('kategori-asset.index', compact('kategoriAssets'));
    }

    public function create()
    {
        return view('kategori-asset.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_kategori_asset' => 'required|max:20|unique:tbl_kategori_asset,kode_kategori_asset',
            'kategori_asset' => 'required|max:25',
        ]);

        KategoriAsset::create($request->all());
        return redirect()->route('kategori-asset.index')->with('success', 'Kategori Asset berhasil ditambahkan.');
    }

    public function edit(KategoriAsset $kategoriAsset)
    {
        return view('kategori-asset.edit', compact('kategoriAsset'));
    }

    public function update(Request $request, KategoriAsset $kategoriAsset)
    {
        $request->validate([
            'kode_kategori_asset' => 'required|max:20|unique:tbl_kategori_asset',
            'kategori_asset' => 'required|max:25',
        ]);

        $kategoriAsset->update($request->all());
        return redirect()->route('kategori-asset.index')->with('success', 'Kategori Asset berhasil diperbarui.');
    }

    public function destroy(KategoriAsset $kategoriAsset)
    {
        $kategoriAsset->delete();
        return redirect()->route('kategori-asset.index')->with('success', 'Kategori Asset berhasil dihapus.');
    }
}
