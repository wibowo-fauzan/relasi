<!-- resources/views/gurubk/index.blade.php -->

@extends('data.data-gurubk')

@section('gurubk')
    <h1>Daftar Guru BK</h1>

    <a href="{{ route('gurubk.create') }}" class="btn btn-primary mb-3" style="width: 20%;">Tambah Guru BK +</a>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Tanggal Lahir</th>
                <th>NIP</th>
                <th>Jenis Kelamin</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($guruBKs as $guruBK)
                <tr>
                    <td>{{ $guruBK->nama }}</td>
                    <td>{{ $guruBK->tanggal_lahir }}</td>
                    <td>{{ $guruBK->nip }}</td>
                    <td>{{ $guruBK->jenis_kelamin }}</td>
                    <td>
                        <a href="{{ route('gurubk.show', $guruBK->id) }}" class="btn btn-primary">Detail</a>
                        <a href="{{ route('gurubk.edit', $guruBK->id) }}" class="btn btn-secondary">Edit</a>
                        <form action="{{ route('gurubk.destroy', $guruBK->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus guru BK ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
