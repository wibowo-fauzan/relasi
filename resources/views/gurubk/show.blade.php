<!-- resources/views/gurubk/show.blade.php -->

@extends('data.data-gurubk')

@section('gurubk')
    <h1>Detail Guru BK</h1>

    <table class="table">
        <tr>
            <th>Nama</th>
            <td>{{ $gurubk->nama }}</td>
        </tr>
        <tr>
            <th>Tanggal Lahir</th>
            <td>{{ $gurubk->tanggal_lahir }}</td>
        </tr>
        <tr>
            <th>NIP</th>
            <td>{{ $gurubk->nip }}</td>
        </tr>
        <tr>
            <th>Jenis Kelamin</th>
            <td>{{ $gurubk->jenis_kelamin }}</td>
        </tr>
    </table>

    <a href="{{ route('gurubk.edit', $gurubk->id) }}" class="btn btn-primary">Edit</a>
    <form action="{{ route('gurubk.destroy', $gurubk->id) }}" method="POST" class="d-inline">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus guru BK ini?')">Hapus</button>
    </form>
@endsection
