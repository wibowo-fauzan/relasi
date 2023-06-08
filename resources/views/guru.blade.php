<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>tampilan guru</title>
    {{-- bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    {{-- bootstrap --}}
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    {{-- endbootstrap --}}
</head>

<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid container">
            <span class="navbar-text">
                <ul class="navbar-nav">
                    @if(Route::has('login'))
                        @auth
                            @if(auth()->user()->role === 'admin')
                                <li class="nav-item">
                                    <a href="{{ url('/admin') }}" class="nav-link">{{ auth()->user()->username }}</a>
                                </li>
                            @elseif(auth()->user()->role === 'guru')
                                <li class="nav-item">
                                    <a href="{{ url('/guru') }}" class="nav-link">{{ auth()->user()->username }}</a>
                                </li>
                            @elseif(auth()->user()->role === 'murid')
                                <li class="nav-item">
                                    <a href="{{ url('/murid') }}" class="nav-link">{{ auth()->user()->username }}</a>
                                </li>
                            @endif
                        @else
                        @endif
                    @endif
                </ul>
            </span>
            <div class="ml">
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav container">
                      <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="/guru.index">Data Guru</a>
                      </li>
                    </ul>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button class="btn text-white bg-primary" type="submit">Logout</button>
                    </form>
                  </div>
            </div>
        </div>
    </nav>
</body>

</html>
