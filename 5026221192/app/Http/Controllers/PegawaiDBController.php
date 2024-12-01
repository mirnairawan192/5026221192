<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PegawaiDBController extends Controller
{
    // Method untuk menampilkan data pegawai dengan pagination
    public function index()
    {
        // Mengambil data pegawai dengan pagination (10 data per halaman)
        $pegawai = DB::table('pegawai')->paginate(10);

        // Mengirim data pegawai ke view index.blade.php
        return view('index', ['pegawai' => $pegawai]);
    }

    // Method untuk menampilkan form tambah pegawai
    public function tambah()
    {
        // Memanggil view tambah.blade.php
        return view('tambah');
    }

    // Method untuk menyimpan data pegawai ke database
    public function store(Request $request)
    {
        // Insert data ke tabel pegawai
        DB::table('pegawai')->insert([
            'pegawai_nama' => $request->nama,
            'pegawai_jabatan' => $request->jabatan,
            'pegawai_umur' => $request->umur,
            'pegawai_alamat' => $request->alamat
        ]);

        // Redirect ke halaman pegawai
        return redirect('/pegawai');
    }

    // Method untuk mengedit data pegawai berdasarkan id
    public function edit($id)
    {
        // Mengambil data pegawai berdasarkan id yang dipilih
        $pegawai = DB::table('pegawai')->where('pegawai_id', '=', $id)->first();

        // Jika data pegawai tidak ditemukan, redirect dengan pesan error
        if (!$pegawai) {
            return redirect('/pegawai')->with('error', 'Data pegawai tidak ditemukan');
        }

        // Mengirimkan data pegawai ke view edit.blade.php
        return view('edit', ['pegawai' => $pegawai]);
    }

    // Method untuk memperbarui data pegawai
    public function update(Request $request)
    {
        // Update data pegawai berdasarkan id yang dipilih
        DB::table('pegawai')->where('pegawai_id', $request->id)->update([
            'pegawai_nama' => $request->nama,
            'pegawai_jabatan' => $request->jabatan,
            'pegawai_umur' => $request->umur,
            'pegawai_alamat' => $request->alamat
        ]);

        // Redirect ke halaman pegawai setelah update
        return redirect('/pegawai');
    }

    // Method untuk menghapus data pegawai
    public function hapus($id)
    {
        // Menghapus data pegawai berdasarkan id yang dipilih
        DB::table('pegawai')->where('pegawai_id', $id)->delete();

        // Redirect ke halaman pegawai setelah penghapusan
        return redirect('/pegawai');
    }

    // Method untuk mencari pegawai berdasarkan nama
    public function cari(Request $request)
    {
        // Menangkap data pencarian
        $cari = $request->cari;

        // Mengambil data pegawai yang sesuai dengan pencarian
        $pegawai = DB::table('pegawai')
            ->where('pegawai_nama', 'like', "%" . $cari . "%")
            ->paginate(10);  // Menambahkan pagination di sini

        // Mengirimkan data pegawai ke view index.blade.php
        return view('index', ['pegawai' => $pegawai]);
    }
}
