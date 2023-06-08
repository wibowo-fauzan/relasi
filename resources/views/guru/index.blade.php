<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Guru</title>
    {{-- bootstrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>
    {{-- endbootstrap --}}
    <style>
        .search-box {
            position: relative;
        }

        .search-box i {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            left: 10px;
        }
    </style>
</head>

<body>
    @include('guru.navguru')
    <h1>Data Guru</h1>
    <a href="{{ route('guru.create') }}" class="btn btn-primary mt-5">Tambah Guru</a>
    <div class="container-xl mt-4">
        <div class="table-responsive">
            <div class="table-wrapper">
                {{-- <div class="table-title">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="search-box">
                                <i class="material-icons">&#xE8B6;</i>
                                <input type="text" class="form-control" placeholder="Search&hellip;">
                            </div>
                        </div>
                    </div>
                </div> --}}
                <table class="table table-striped table-hover table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Username</th>
                            <th>Nama</th>
                            <th>Guru BK</th>
                            <th>Jadwal Pertemuan Murid</th>
                            <th>Tema Masalah</th>
                            <th>Solusi Masalah</th>
                            <th>Keterangan Pertemuan</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($gurus as $guru)
                            <tr>
                                <td>{{ $guru->id }}</td>
                                <td>{{ $guru->username }}</td>
                                <td>{{ $guru->nama }}</td>
                                <td>{{ $guru->guru_bk }}</td>
                                <td>{{ $guru->jadwal_pertemuan_murid }}</td>
                                <td>{{ $guru->tema_masalah }}</td>
                                <td>{{ $guru->solusi_masalah }}</td>
                                <td>{{ $guru->keterangan_pertemuan }}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{ route('guru.show', $guru->id) }}" class="btn btn-sm btn-info">Lihat</a>
                                        <a href="{{ route('guru.edit', $guru->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                        <form action="{{ route('guru.destroy', $guru->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>                    
                </table>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
