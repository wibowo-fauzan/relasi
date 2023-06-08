<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $tittle }}</title>
    {{-- bootstrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
        <!-- jQuery library -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Bootstrap JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
    crossorigin="anonymous"></script>

    <style>
        .card {
            background-color: #f8f9fa;
            border: none;
            border-radius: 10px;
        }

        .card-title {
            color: #333;
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .card-number {
            color: #777;
            font-size: 24px;
            font-weight: bold;
        }

        .card-icon {
            color: #777;
            font-size: 48px;
        }
    </style>
</head>

<body>
    @include('admin.main-nav')
    <div class="mt-5 container">
        <div class="row mx-auto">
            <!-- Earnings (Annual) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="card-title">Akun Admin</div>
                                <div class="card-number">{{ $admin }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="bi bi-person-fill card-icon"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="card-title">Akun Guru</div>
                                <div class="card-number">{{ $gurubk }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="bi bi-person-circle card-icon"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>                
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="card-title">Akun Walikelas</div>
                                <div class="card-number">{{ $walikelas }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="bi bi-person-circle card-icon"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>                
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="card-title">Akun Murid</div>
                                <div class="card-number">{{ $murid }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="bi bi-people-fill card-icon"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-3">
            <p>Selamat datang di panel admin. Kelola pengguna, atur hak akses, dan lakukan tugas administratif dengan mudah.</p>
            <a href="https://www.smktarunabhakti.net/" class="btn btn-primary">Kunjungi Website SMK Taruna Bhakti Depok</a>
        </div>
        <div class="row">

            <div class="col-lg-6">
                
                <div class="card mb-4 mt-2">
                    <div class="card-header">apa</div>
                    
                </div>
            </div>
        </div>
    </div>
    
</body>

</html>
