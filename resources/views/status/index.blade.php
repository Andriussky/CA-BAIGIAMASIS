<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@extends('layouts.admin.main')
 <body>
<div class="row">
<div class="col s12">
    <h1>Statuses</h1>
    <a href="{{route('statuses.create')}}" class="admin-btn">Create</a>
    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Type</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($statuses as $status)
            <tr>
                <td>{{$status->id}}</td>
                <td>{{$status->name}}</td>
                <td>{{$status->type}}</td>
                <td>
                    <a href="{{route('statuses.edit', $status->id)}}" class="admin-btn">Edit</a>
                    <form action="{{route('statuses.destroy', $status->id)}}" class="admin-btn" method="post">
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
</div>
 </body>
