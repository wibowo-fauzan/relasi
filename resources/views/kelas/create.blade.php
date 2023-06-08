<!-- resources/views/kelas/index.blade.php -->
@extends('data.data-kelas')
{{-- @section('kelas') --}}
@section('kelas')
<h1>Tambah Kelas</h1>

<form action="{{ route('kelas.store') }}" method="POST">
    @csrf

    <div class="form-group">
        <label for="nama">Nama Kelas</label>
        <input type="text" name="nama" id="nama" class="form-control">
        @error('nama')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection
