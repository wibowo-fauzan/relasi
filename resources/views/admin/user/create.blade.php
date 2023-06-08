<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create User</title>
    <link href="{{ asset('FlexStart/assets/img/loggo.png') }}" rel="icon">
    {{-- Bootstrap CSS --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
        .container {
            max-width: 400px;
            margin-top: 50px;
        }
        h1 {
            text-align: center;
            margin-bottom: 30px;
        }
        button[type="submit"] {
            width: 100%;
        }
        .btn-home {
            width: 100%;
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Create User</h1>
        <form method="POST" action="{{ route('user.store') }}">
            @csrf
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="role">Role</label>
                <select class="form-control" id="role" name="role" required>
                    <option value="admin">Admin</option>
                    <option value="gurubk">Guru BK</option>
                    <option value="walikelas">Wali Kelas</option>
                    <option value="murid">Murid</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Buat Akun</button>
        </form>
        <a href="/users" class="btn btn-secondary btn-home">Kembali ke Halaman Utama</a>
    </div>

    {{-- Bootstrap JS --}}
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KyZXEAg3QhqLMpG8r+2b8n0z61tUeylgMd5LCy6Adf4Jb4oP8Df3p3WVj5Gw6fjq"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>

</html>
