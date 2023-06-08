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