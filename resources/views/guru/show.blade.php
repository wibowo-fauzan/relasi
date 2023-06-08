<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Guru</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        table {
            margin-top: 20px;
        }
        th {
            width: 200px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Detail Guru</h1>

        @if($guru)
            <table class="table table-striped">
                <tr>
                    <th>ID</th>
                    <td>{{ $guru->id }}</td>
                </tr>
                <tr>
                    <th>Username</th>
                    <td>{{ $guru->username }}</td>
                </tr>
                <tr>
                    <th>Nama</th>
                    <td>{{ $guru->nama }}</td>
                </tr>
                <tr>
                    <th>Guru BK</th>
                    <td>{{ $guru->guru_bk }}</td>
                </tr>
                <tr>
                    <th>Jadwal Pertemuan Murid</th>
                    <td>{{ $guru->jadwal_pertemuan_murid }}</td>
                </tr>
                <tr>
                    <th>Tema Masalah</th>
                    <td>{{ $guru->tema_masalah }}</td>
                </tr>
                <tr>
                    <th>Solusi Masalah</th>
                    <td>{{ $guru->solusi_masalah }}</td>
                </tr>
                <tr>
                    <th>Keterangan Pertemuan</th>
                    <td>{{ $guru->keterangan_pertemuan }}</td>
                </tr>
            </table>
            <a href="/guru.index" class="btn bg-primary text-white">Kembali</a>
        @else
            <p>Guru not found.</p>
        @endif
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
