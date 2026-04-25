<?php

use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard', function () {
    return view('pages.dashboard');
});
Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa');
Route::get('/create', [MahasiswaController::class, 'create'])->name('form-mhs');
Route::post('/store', [MahasiswaController::class, 'store'])->name('store');
Route::get('/mahasiswa/{npm}/edit', [MahasiswaController::class, 'edit'])->name('form-edit-mhs');
Route::put('/mahasiswa/{npm}', [MahasiswaController::class, 'update'])->name('update');
Route::delete('/mahasiswa/{npm}', [MahasiswaController::class, 'destroy'])->name('mahasiswa.delete');
