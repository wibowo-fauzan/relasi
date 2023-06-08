<!-- resources/views/waliKelas/index.blade.php -->

@extends('data.data-walikelas')

@section('walikelas')
    <h1>Daftar Wali Kelas</h1>

    <a href="{{ route('waliKelas.create') }}" class="btn btn-primary mb-3" style="width: 20%;">Tambah Wali Kelas +</a>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>NIP</th>
                <th>Jenis Kelamin</th>
                <th>Tanggal Lahir</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($waliKelas as $wali)
                <tr>
                    <td>{{ $wali->nip }}</td>
                    <td>{{ $wali->jenis_kelamin }}</td>
                    <td>{{ $wali->tanggal_lahir }}</td>
                    <td>
                        <a href="{{ route('waliKelas.show', $wali->id) }}" class="btn btn-primary">Detail</a>
                        <a href="{{ route('waliKelas.edit', $wali->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('waliKelas.destroy', $wali->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data Wali Kelas ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
