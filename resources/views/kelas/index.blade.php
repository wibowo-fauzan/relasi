<!-- resources/views/kelas/index.blade.php -->
@extends('data.data-kelas')
@section('kelas')
<h1>Daftar Kelas</h1>

<a href="{{ route('kelas.create') }}" class="btn btn-primary mb-3" style="width: 20%;">Tambah Kelas +</a>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama Kelas</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($kelas as $kelasItem)
            <tr>
                <td>{{ $kelasItem->id }}</td>
                <td>{{ $kelasItem->nama }}</td>
                <td>
                    <a href="{{ route('kelas.edit', $kelasItem->id) }}" class="btn btn-primary btn-sm">Edit</a>
                    <form action="{{ route('kelas.destroy', $kelasItem->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus kelas ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
