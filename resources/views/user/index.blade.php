<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@extends('layouts.admin.main')
@section('content')
    <body></body>
<div class="row">
    <div class="col s12">
        <h1>Users</h1>
        <a href="{{route('users.create')}}" class="admin-btn">Create</a>
        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Surname</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->role}}</td>
                    <td>{{$user->type}}</td>
                    <td>
                        <a href="{{route('users.edit', $user->id)}}" class="admin-btn">Edit</a>
                        <form action="{{route('users.destroy', $user->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</body>
@endsection
