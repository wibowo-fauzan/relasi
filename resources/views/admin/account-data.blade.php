@extends('data.data-create-akun')
@section('create')
    <div class="container">
        <div class="container mt-4">
            <div class="d-flex justify-content-between align-items-center">
                <h2>Akun List</h2>
                <a href="{{ route('user.create') }}" class="btn btn-primary">Tambahkan Akun +</a>
            </div>
            <table class="table mt-3">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->username }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->role }}</td>
                        <td>
                            <a href="{{ route('user.show', $user->id) }}" class="btn btn-primary btn-sm mr-1">View</a>
                            <a href="{{ route('user.edit', $user->id) }}" class="btn btn-warning btn-sm mr-1">Edit</a>
                            <form action="{{ route('user.destroy', $user->id) }}" method="POST"
                                style="display:inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection