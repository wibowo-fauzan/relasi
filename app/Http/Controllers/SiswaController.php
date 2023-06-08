<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;

class SiswaController extends Controller
{
    public function index()
{
    $siswas = Siswa::all();
    return view('siswa.index', compact('siswas'));
}

public function create()
{
    return view('siswa.create');
}

public function store(Request $request)
{
    $validatedData = $request->validate([
        'nama' => 'required',
        'nisn' => 'required|unique:siswas',
        'tempat_lahir' => 'required',
        'tanggal_lahir' => 'required',
    ]);

    Siswa::create($validatedData);
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
    return view('siswa.edit', compact('siswa'));
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
