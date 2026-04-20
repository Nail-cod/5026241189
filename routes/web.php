<?php
use App\Http\Controllers\DosenController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function () {
    return "Halo, Selamat datang di tutorial Laravel www.malasngoding.com";
});

Route::get('blog', function () {
    return view('blog');
});

Route::get('pert5', function () {
    return view ('pertemuan5');
});

Route::get('dosen', [DosenController::class, 'index']);
