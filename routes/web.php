<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MerkController;
use App\Http\Controllers\LokasiController;
use App\Http\Controllers\OpnameController;
use App\Http\Controllers\SatuanController;
use App\Http\Controllers\PengadaanController;
use App\Http\Controllers\DepresiasiController;
use App\Http\Controllers\DistributorController;
use App\Http\Controllers\MasterBarangController;
use App\Http\Controllers\MutasiLokasiController;
use App\Http\Controllers\KategoriAssetController;
use App\Http\Controllers\HitungDepresiasiController;
use App\Http\Controllers\SubKategoriAssetController;

// Login Routes
Route::get('/', function () {
    return redirect()->route('login');
});
Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');


// Protected Routes
Route::middleware('auth')->group(function () {
    Route::resources([
        'kategori-asset' => KategoriAssetController::class,
        'sub-kategori-asset' => SubKategoriAssetController::class,
        'distributor' => DistributorController::class,
        'merk' => MerkController::class,
        'satuan' => SatuanController::class,
        'master-barang' => MasterBarangController::class,
        'depresiasi' => DepresiasiController::class,
        'pengadaan' => PengadaanController::class,
        'lokasi' => LokasiController::class,
        'mutasi-lokasi' => MutasiLokasiController::class,
        'opname' => OpnameController::class,
        'hitung-depresiasi' => HitungDepresiasiController::class,
    ]);
});
