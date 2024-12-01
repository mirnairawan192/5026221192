<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PegawaiController extends Controller
{
    // Method untuk menampilkan data pegawai
    public function index()
    {
        // Mengambil data pegawai dari tabel pegawai
        $pegawai = DB::table('pegawai')->get();

        // Mengirim data pegawai ke view pegawai.blade.php
        return view('pegawai', ['pegawai' => $pegawai]);
    }

    // Method untuk menampilkan form tambah pegawai
    public function tambah()
    {
        // Memanggil view tambah
        return view('tambah');
    }

    // Method untuk edit data pegawai
    public function edit($id)
    {
        // Mengambil data pegawai berdasarkan id yang dipilih
        $pegawai = DB::table('pegawai')->where('pegawai_id', $id)->first();

        // Jika data pegawai tidak ditemukan, redirect dengan pesan error
        if (!$pegawai) {
            return redirect('/pegawai')->with('error', 'Data pegawai tidak ditemukan');
        }

        // Mengirimkan data pegawai ke view edit.blade.php
        return view('edit', ['pegawai' => $pegawai]);
    }

    // Method untuk update data pegawai
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
}
