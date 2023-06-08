<!-- resources/views/siswa/show.blade.php -->

@extends('data.data-siswa')

@section('siswa')
    <h1>Detail Siswa</h1>

    <table class="table">
        <tr>
            <th>NISN</th>
            <td>{{ $siswa->nisn }}</td>
        </tr>
        <tr>
            <th>Nama</th>
            <td>{{ $siswa->nama }}</td>
        </tr>
        <tr>
            <th>Tempat Lahir</th>
            <td>{{ $siswa->tempat_lahir }}</td>
        </tr>
        <tr>
            <th>Tanggal Lahir</th>
            <td>{{ $siswa->tanggal_lahir }}</td>
        </tr>
    </table>

    <a href="{{ route('siswa.edit', $siswa->id) }}" class="btn btn-primary">Edit</a>
    <form action="{{ route('siswa.destroy', $siswa->id) }}" method="POST" class="d-inline">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus siswa ini?')">Hapus</button>
    </form>
@endsection
