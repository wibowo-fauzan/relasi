<!-- resources/views/kelas/edit.blade.php -->

@extends('data.data-kelas')

@section('kelas')
<h1>Edit Kelas</h1>

<form action="{{ route('kelas.update', $kelas->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="nama">Nama Kelas</label>
        <input type="text" name="nama" id="nama" class="form-control" value="{{ $kelas->nama }}">
        @error('nama')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
</form>
@endsection
