
@include('admin.main-nav')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3 class="text-center mx-auto text-uppercase">Akun Pengguna</h3>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Peran</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->username }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->role->name }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

