<!-- resources/views/waliKelas/show.blade.php -->

@extends('data.data-walikelas')

@section('walikelas')
    <h1>Detail Wali Kelas</h1>

    <table class="table">
        <tr>
            <th>NIP</th>
            <td>{{ $waliKelas->nip }}</td>
        </tr>
        <tr>
            <th>Jenis Kelamin</th>
            <td>{{ $waliKelas->jenis_kelamin }}</td>
        </tr>
        <tr>
            <th>Tanggal Lahir</th>
            <td>{{ $waliKelas->tanggal_lahir }}</td>
        </tr>
    </table>

    <a href="{{ route('waliKelas.index') }}" class="btn btn-primary">Kembali</a>
@endsection
