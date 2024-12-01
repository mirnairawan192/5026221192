<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiController; // Menggunakan PegawaiController

// Route CRUD untuk pegawai
Route::get('/pegawai', [PegawaiController::class, 'index']); // Menampilkan daftar pegawai
Route::get('/pegawai/tambah', [PegawaiController::class, 'tambah']); // Menampilkan form tambah pegawai
Route::post('/pegawai/store', [PegawaiController::class, 'store']); // Menyimpan data pegawai
Route::get('/pegawai/edit/{id}', [PegawaiController::class, 'edit']); // Menampilkan form edit pegawai
Route::post('/pegawai/update', [PegawaiController::class, 'update']); // Mengupdate data pegawai
Route::get('/pegawai/hapus/{id}', [PegawaiController::class, 'hapus']); // Menghapus data pegawai

// Tambahkan rute untuk pencarian pegawai jika diperlukan
Route::get('/pegawai/cari', [PegawaiController::class, 'cari']); // Rute untuk mencari pegawai berdasarkan nama
