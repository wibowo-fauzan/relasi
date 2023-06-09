<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Guru</title>
    <link href="{{ asset('FlexStart/assets/img/loggo.png') }}" rel="icon">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Tambah Guru</h1>

        <form action="{{ route('guru.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" name="username" id="username" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" name="nama" id="nama" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="guru_bk">Guru BK:</label>
                <select name="guru_bk" id="guru_bk" class="form-control" required>
                    <option value="">Pilih Guru BK</option>
                    <option value="Pak Ricky">Pak Ricky</option>
                    <option value="Bu Sandra">Bu Sandra</option>
                    {{-- <option value="guru3">Guru 3</option> --}}
                    {{-- <option value="guru4">Guru 4</option> --}}
                    {{-- <option value="guru5">Guru 5</option> --}}
                    {{-- <option value="guru6">Guru 6</option> --}}
                    <!-- Tambahkan opsi guru lainnya di sini -->
                </select>
            </div>
            

            <div class="form-group">
                <label for="jadwal_pertemuan_murid">Jadwal Pertemuan Murid:</label>
                <input type="text" name="jadwal_pertemuan_murid" id="jadwal_pertemuan_murid" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="tema_masalah">Tema Masalah:</label>
                <input type="text" name="tema_masalah" id="tema_masalah" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="solusi_masalah">Solusi Masalah:</label>
                <textarea name="solusi_masalah" id="solusi_masalah" class="form-control" required></textarea>
            </div>

            <div class="form-group">
                <label for="keterangan_pertemuan">Keterangan Pertemuan:</label>
                <textarea name="keterangan_pertemuan" id="keterangan_pertemuan" class="form-control" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>
