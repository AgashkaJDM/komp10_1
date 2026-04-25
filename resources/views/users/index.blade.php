@extends('layouts.head')

@section('main-content')
<div class="container-lg">
    <div class="d-flex justify-content-between align-items-center mt-5">
        <h3>Users</h3>
        <a href="{{ route('users.create') }}" class="btn btn-primary">Add User</a>
    </div>
    @if(session('success'))
        <div class="alert alert-success mt-3">{{ session('success') }}</div>
    @endif
    <table class="table table-striped table-hover my-3">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Created At</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <th scope="row">{{ $user->id }}</th>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->created_at->format('d M Y H:i') }}</td>
                    <td>
                        <a href="{{ route('users.show', $user) }}" class="btn btn-sm btn-info">View</a>
                        <a href="{{ route('users.edit', $user) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('users.destroy', $user) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection