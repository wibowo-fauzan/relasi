<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WaliKelas;

class WaliKelasController extends Controller
{
    public function index()
    {
        $waliKelas = WaliKelas::all();

        return view('waliKelas.index', compact('waliKelas'));
    }

    public function create()
    {
        return view('waliKelas.create');
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nip' => 'required|unique:wali_kelas,nip',
            'jenis_kelamin' => 'required|in:L,P',
            'tanggal_lahir' => 'required|date',
        ]);

        // Simpan data WaliKelas baru
        WaliKelas::create($request->all());

        return redirect()->route('waliKelas.index')->with('success', 'Data Wali Kelas berhasil ditambahkan.');
    }

    public function show(WaliKelas $waliKelas)
    {
        return view('waliKelas.show', compact('waliKelas'));
    }

    public function edit(WaliKelas $waliKelas)
    {
        return view('waliKelas.edit', compact('waliKelas'));
    }

    public function update(Request $request, WaliKelas $waliKelas)
    {
        // Validasi input
        $request->validate([
            'nip' => 'required|unique:wali_kelas,nip,' . $waliKelas->id,
            'jenis_kelamin' => 'required|in:L,P',
            'tanggal_lahir' => 'required|date',
        ]);

        // Update data WaliKelas
        $waliKelas->update($request->all());

        return redirect()->route('waliKelas.index')->with('success', 'Data Wali Kelas berhasil diperbarui.');
    }

    public function destroy(WaliKelas $waliKelas)
    {
        // Hapus data WaliKelas
        $waliKelas->delete();

        return redirect()->route('waliKelas.index')->with('success', 'Data Wali Kelas berhasil dihapus.');
    }
}
