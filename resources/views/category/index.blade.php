<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@extends('layouts.admin.main')

@section('content')
    <body>
<div class="row">
    <div class="col s12">
        <h1>Categories</h1>
        @auth
            <ul class="hidden w-8/12 md:flex items-center justify-center space-x-8">
                <li>
                </li>
                @if (auth()?->user()?->isAdmin())


                <a href="{{route('categories.create')}}" class="admin-btn">Create</a>
                @endif
                @endauth

        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Parent</th>
                <th>Actions</th>

            </tr>
            </thead>
            <tbody>
            @foreach($categories as $category)
                <tr>
                    <td>{{$category->id}}</td>
                    <td> <a href="{{route('category.show', $category->slug)}}" class="admin-btn">{{$category->name}}</a> </td>
                    <td>{{$category?->parent?->name}}</td>
                    <td>

                        @auth
                            <ul class="hidden w-8/12 md:flex items-center justify-center space-x-8">
                                <li>
                                </li>
                                @if (auth()?->user()?->isAdmin())

                                <a href="{{route('categories.edit', $category->id)}}" class="admin-btn">Edit</a>
                        <form action="{{route('categories.destroy', $category->id)}}" class="admin-btn" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                        @endif
                        @endauth

                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
    </body>
