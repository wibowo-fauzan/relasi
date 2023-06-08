<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GuruBK;

class GuruBKController extends Controller
{
    public function index()
    {
        $guruBKs = GuruBK::all();
        return view('gurubk.index', compact('guruBKs'));
    }

    public function create()
    {
        return view('gurubk.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'tanggal_lahir' => 'required|date',
            'nip' => 'required|unique:guru_bk,nip',
            'jenis_kelamin' => 'required|in:L,P',
        ]);

        GuruBK::create($request->all());

        return redirect()->route('gurubk.index')->with('success', 'Guru BK berhasil ditambahkan.');
    }

    public function show(GuruBK $gurubk)
    {
        return view('gurubk.show', compact('gurubk'));
    }

    public function edit(GuruBK $gurubk)
    {
        return view('gurubk.edit', compact('gurubk'));
    }

    public function update(Request $request, GuruBK $gurubk)
    {
        $request->validate([
            'nama' => 'required',
            'tanggal_lahir' => 'required|date',
            'nip' => 'required|unique:guru_bk,nip,' . $gurubk->id,
            'jenis_kelamin' => 'required|in:L,P',
        ]);

        $gurubk->update($request->all());

        return redirect()->route('gurubk.index')->with('success', 'Guru BK berhasil diperbarui.');
    }

    public function destroy(GuruBK $gurubk)
    {
        $gurubk->delete();

        return redirect()->route('gurubk.index')->with('success', 'Guru BK berhasil dihapus.');
    }
}
