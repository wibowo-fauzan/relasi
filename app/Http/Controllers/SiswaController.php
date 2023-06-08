<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\User;

class SiswaController extends Controller
{
    public function index()
    {
        $siswas = Siswa::all();
        return view('siswa.index', compact('siswas'));
    }

    public function create()
    {
        $kelas = Kelas::all();
        return view('siswa.create', compact('kelas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'kelas_id' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required',
            'nisn' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
        ]);

        $user = User::create([
            'username' => $request->input('nama'),
            'email' => $request->input('email'),
            'password' => $request->input('password'),
            'role' => 'murid',
        ]);

        $siswa = Siswa::create([
            'user_id' => $user->id,
            'kelas_id' => $request->input('kelas_id'),
            'nama' => $request->input('nama'),
            'nisn' => $request->input('nisn'),
            'tempat_lahir' => $request->input('tempat_lahir'),
            'tanggal_lahir' => $request->input('tanggal_lahir'),
        ]);

        return redirect()->route('siswa.index')->with('success', 'Data siswa berhasil ditambahkan');
    }

    public function show($id)
    {
        $siswa = Siswa::findOrFail($id);
        return view('siswa.show', compact('siswa'));
    }

    public function edit($id)
    {
        $siswa = Siswa::findOrFail($id);
        $kelas = Kelas::all();
        return view('siswa.edit', compact('siswa', 'kelas'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'nisn' => 'required|unique:siswas,nisn,' . $id,
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
        ]);

        $siswa = Siswa::findOrFail($id);
        $siswa->update($validatedData);
        return redirect()->route('siswa.index')->with('success', 'Data siswa berhasil diperbarui');
    }

    public function destroy($id)
    {
        $siswa = Siswa::findOrFail($id);
        $siswa->delete();
        return redirect()->route('siswa.index')->with('success', 'Data siswa berhasil dihapus');
    }
}
