<?php

use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MatakuliahController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard', function () {
    return view('pages.dashboard');
});
Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa');
Route::get('/mahasiswa/create', [MahasiswaController::class, 'create'])->name('form-mhs');
Route::post('/mahasiswa/store', [MahasiswaController::class, 'store'])->name('mahasiswastore');
Route::get('/mahasiswa/{npm}/edit', [MahasiswaController::class, 'edit'])->name('form-edit-mhs');
Route::put('/mahasiswa/{npm}', [MahasiswaController::class, 'update'])->name('mahasiswaupdate');
Route::delete('/mahasiswa/{npm}', [MahasiswaController::class, 'destroy'])->name('mahasiswa.delete');


Route::get('/dosen', [DosenController::class, 'index'])->name('dosen');
Route::get('/dosen/create', [DosenController::class, 'create'])->name('form-dosen');
Route::post('/dosen/store', [DosenController::class, 'store'])->name('dosenstore');
Route::get('/dosen/{nidn}/edit', [DosenController::class, 'edit'])->name('form-edit-dosen');
Route::put('/dosen/{nidn}', [DosenController::class, 'update'])->name('dosenupdate');
Route::delete('/dosen/{nidn}', [DosenController::class, 'destroy'])->name('dosen.delete');

Route::get('/matkul', [MatakuliahController::class, 'index'])->name('matkul');
Route::get('/matkul/create', [MatakuliahController::class, 'create'])->name('form-matkul');
Route::post('/matkul/store', [MatakuliahController::class, 'store'])->name('matkulstore');
Route::get('/matkul/{kode_matakuliah}/edit', [MatakuliahController::class, 'edit'])->name('form-edit-matkul');
Route::put('/matkul/{kode_matakuliah}', [MatakuliahController::class, 'update'])->name('matkulupdate');
Route::delete('/matkul/{kode_matakuliah}', [MatakuliahController::class, 'destroy'])->name('matkul.delete');
