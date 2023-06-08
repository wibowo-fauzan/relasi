<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <div class="container">
        <a class="navbar-brand" href="/admin">ADMIN</a>
        <div class="navbar-collapse" id="navbarNavAltMarkup">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/admin">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/admin/account-data">Account Data</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="log out"
                            style="border: none; background: none; color: white; button: none;">Logout</button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>