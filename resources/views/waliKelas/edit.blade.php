<!-- resources/views/waliKelas/edit.blade.php -->

@extends('data.data-walikelas')

@section('walikelas')
    <h1>Edit Wali Kelas</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('waliKelas.update', $waliKelas->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nip">NIP</label>
            <input type="text" name="nip" id="nip" class="form-control" value="{{ $waliKelas->nip }}">
        </div>
        <div class="form-group">
            <label for="jenis_kelamin">Jenis Kelamin</label>
            <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                <option value="L" {{ $waliKelas->jenis_kelamin === 'L' ? 'selected' : '' }}>Laki-laki</option>
                <option value="P" {{ $waliKelas->jenis_kelamin === 'P' ? 'selected' : '' }}>Perempuan</option>
            </select>
        </div>
        <div class="form-group">
            <label for="tanggal_lahir">Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control" value="{{ $waliKelas->tanggal_lahir }}">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection
