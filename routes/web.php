<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController ;
use App\Http\Controllers\PegawaiController ;
use App\Http\Controllers\BlogController ;
use App\Http\Controllers\PegawaiDBController;
use App\Http\Controllers\keranjangController;
use App\Http\Controllers\televisiController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\easController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function () {
	return "<h1>Halo, Selamat datang</h1>di tutorial laravel <i>www.malasngoding.com</i>";
});


Route::get('biodata', function () {
	return view('biodata');
});

Route::get('p1', function () {
	return view('pertemuan1');
});

Route::get('p2', function () {
	return view('pertemuan2');
});


Route::get('p3', function () {
	return view('pertemuan3');
});

Route::get('p4', function () {
	return view('pertemuan4');
});

Route::get('p5', function () {
	return view('pertemuan5');
});

Route::get('/', function () {
	return view('welcome');
});

Route::get('dosen', [DosenController::class, 'index']);
Route::get('biodata', [DosenController::class, 'biodata']);

Route::get('/pegawainama/{nama}', [PegawaiController::class, 'index']);
Route::get('/formulir', [PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);
//crud tabel pegawai
Route::get('/pegawai', [PegawaiDBController::class, 'index']);
Route::get('/pegawaitambah',[PegawaiDBController::class, 'tambah']);
Route::post('/pegawaistore',[PegawaiDBController::class, 'store']);
Route::get('/pegawaiedit/{id}',[PegawaiDBController::class, 'edit']);
Route::post('/pegawaiupdate',[PegawaiDBController::class, 'update']);
Route::get('/pegawaihapus/{id}',[PegawaiDBController::class, 'hapus']);
Route::get('/pegawaicari', [PegawaiDBController::class, 'cari']);

// route blog
Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);

// MySQL
Route::get('/pegawai/',[PegawaiDBController::class, 'index']);

//crud tabel keranjangbelanja
Route::get('/keranjangbelanja', [keranjangController::class, 'index_keranjang']);
Route::get('/keranjangbeli/{id}', [keranjangController::class, 'beli']);
Route::post('/keranjangstore', [keranjangController::class, 'storeKeranjang']);
Route::get('/keranjangbatal/{id}', [keranjangController::class, 'batal']);

//crud tabel Siswa
Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');
Route::get('/siswa/create', [SiswaController::class, 'create'])->name('siswa.create');
Route::post('/siswa', [SiswaController::class, 'store'])->name('siswa.store');
Route::get('/siswa/{nrp}/edit', [SiswaController::class, 'edit'])->name('siswa.edit');
Route::put('/siswa/{nrp}', [SiswaController::class, 'update'])->name('siswa.update');
Route::delete('/siswa/{nrp}', [SiswaController::class, 'destroy'])->name('siswa.destroy');

//crud tabel televisi
Route::get('/televisi', [televisiController::class, 'index_televisi']);
Route::get('/televisitambah', [televisiController::class, 'tambah']);
Route::post('/televisistore', [televisiController::class, 'store']);
Route::get('/televisiedit/{id}', [televisiController::class, 'edit']);
Route::post('/televisiupdate', [televisiController::class, 'update']);
Route::get('/televisihapus/{id}', [televisiController::class, 'hapus']);
Route::get('/televisicari', [televisiController::class, 'cari']);

//crud tabel nilaikuliah
Route::get('/nilaikuliah', [NilaiController::class, 'index'])->name('nilaikuliah.index');
Route::get('/nilaikuliah/create', [NilaiController::class, 'create'])->name('nilaikuliah.create');
Route::post('/nilaikuliah', [NilaiController::class, 'store'])->name('nilaikuliah.store');
Route::get('/nilaikuliah/{id}/edit', [NilaiController::class, 'edit'])->name('nilaikuliah.edit');
Route::put('/nilaikuliah/{id}', [NilaiController::class, 'update'])->name('nilaikuliah.update');
Route::delete('/nilaikuliah/{id}', [NilaiController::class, 'destroy'])->name('nilaikuliah.destroy');

// crud tabel stok_barang
Route::get('/eas', [easController::class, 'index']);
Route::get('/eas/tambah', [easController::class, 'create']);
