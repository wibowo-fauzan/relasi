<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Data Guru</title>
    <link href="{{ asset('FlexStart/assets/img/loggo.png') }}" rel="icon">
    {{-- bootstrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Data Guru</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('guru.create') }}">Tambah Guru</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container-xl mt-4">
        <div class="table-responsive">
            <div class="table-wrapper">
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
                        <!-- Replace the code inside this block with your own dynamic data population logic -->
                        <!-- Use a server-side language/framework to fetch and loop through the guru data -->
                        <!-- For example, in PHP: -->
                        <?php foreach ($gurus as $guru): ?>
                        <tr>
                            <td><?php echo $guru->id; ?></td>
                            <td><?php echo $guru->username; ?></td>
                            <td><?php echo $guru->nama; ?></td>
                            <td><?php echo $guru->guru_bk; ?></td>
                            <td><?php echo $guru->jadwal_pertemuan_murid; ?></td>
                            <td><?php echo $guru->tema_masalah; ?></td>
                            <td><?php echo $guru->solusi_masalah; ?></td>
                            <td><?php echo $guru->keterangan_pertemuan; ?></td>
                            <td>
                                <div class="btn-group">
                                    <a href="<?php echo route('guru.show', $guru->id); ?>"
                                        class="btn btn-sm btn-info">Lihat</a>
                                    <a href="<?php echo route('guru.edit', $guru->id); ?>"
                                        class="btn btn-sm btn-warning">Edit</a>
                                    <form action="<?php echo route('guru.destroy', $guru->id); ?>" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                        <!-- End dynamic data population -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>

</html>
