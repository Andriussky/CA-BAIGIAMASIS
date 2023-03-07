@extends('layouts.admin.main')

<div class="row">
    <div class="col s12">
        <h1>Categories</h1>
        @auth
            <ul class="hidden w-8/12 md:flex items-center justify-center space-x-8">
                <li>
                </li>
                @if (auth()?->user()?->isAdmin())


                <a href="{{route('categories.create')}}" class="btn btn-primary">Create</a>
                @endif
                @endauth

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
            @foreach($categories as $category)
                <tr>
                    <td>{{$category->id}}</td>
                    <td>{{$category->name}}</td>
                    <td>{{$category->surname}}</td>
                    <td>

                        @auth
                            <ul class="hidden w-8/12 md:flex items-center justify-center space-x-8">
                                <li>
                                </li>
                                @if (auth()?->user()?->isAdmin())

                                <a href="{{route('categories.edit', $category->id)}}" class="btn btn-primary">Edit</a>
                        <form action="{{route('categories.destroy', $category->id)}}" method="post">
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
