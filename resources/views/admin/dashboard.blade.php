<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    @extends('layouts.app')

    @section('content')
    <div class="container">
        <h1>Admin Dashboard</h1>
        <div class="row">
            <div class="col-md-12">
                <h2>Welcome, Admin!</h2>
                <p>Here you can see user list and manage categories.</p>
            </div>
            <div class="container">
        <h1 class="mb-4">Users List</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->role }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <h3>Categories</h3>
                <a href="{{ route('admin.categories.index') }}" class="btn btn-primary">Manage Categories</a>
            </div>
        </div>
    </div>
    @endsection
</body>
</html>