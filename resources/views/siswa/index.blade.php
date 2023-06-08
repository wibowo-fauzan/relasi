@extends('data.data-siswa')

@section('siswa')
    <h1>Data Siswa</h1>
    <a href="{{ route('siswa.create') }}" class="btn btn-primary mb-3" style="width: 20%;">Tambah Siswa +</a>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>NISN</th>
                <th>Nama</th>
                <th>kelas</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            
            @foreach ($siswas as $siswa)
                <tr>
                    <td>{{ $siswa->nisn }}</td>
                    <td>{{ $siswa->nama }}</td>
                    <td>{{ $siswa->user->email }}</td>
                    <td>{{ $siswa->tempat_lahir }}</td>
                    <td>{{ $siswa->tanggal_lahir }}</td>
                    <td>
                        <a href="{{ route('siswa.show', $siswa->user_id) }}" class="btn btn-info btn-sm">Detail</a>
                        <a href="{{ route('siswa.edit', $siswa->user_id) }}" class="btn btn-primary btn-sm">Edit</a>
                        <form action="{{ route('siswa.destroy', $siswa->user_id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus siswa ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
