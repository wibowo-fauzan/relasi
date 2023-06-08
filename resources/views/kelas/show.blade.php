<!-- resources/views/kelas/show.blade.php -->

@extends('data.data-kelas')

@section('kelas')
    <h1>Detail Kelas</h1>

    <table class="table">
        <tr>
            <th>ID</th>
            <td>{{ $kelas->id }}</td>
        </tr>
        <tr>
            <th>Nama Kelas</th>
            <td>{{ $kelas->nama }}</td>
        </tr>
    </table>

    <a href="{{ route('kelas.edit', $kelas->id) }}" class="btn btn-primary">Edit Kelas</a>
@endsection
