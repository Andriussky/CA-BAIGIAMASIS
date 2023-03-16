{{--<link rel="stylesheet" href="{{ asset('css/grid.css') }}">--}}
@extends('layouts.admin.main')
@section('content')
    <body>
<div class="row">
    <div class="col s12">
        <h1>Shelf</h1>

        @auth
            <ul class="hidden w-8/12 md:flex items-center justify-center space-x-8">
                <li>
                </li>
                @if (auth()?->user()?->isAdmin())
        <a href="{{route('shelf_contents.create')}}" class="admin-btn">Create</a>
                @endif
                @endauth

        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Cover and price</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($shelf_contents as $shelf_content)
                <tr>
                    <td>{{$shelf_content->id}}</td>
                    <td>{{$shelf_content->name}}</td>
                    <td>  <img src="{{$shelf_content->image}}" alt="" class="foto"></td>
                    <td>{{$shelf_content->price}}</td>
                    <td>

                        @auth
                            <ul class="hidden w-8/12 md:flex items-center justify-center space-x-8">
                                <li>
                                </li>
                                @if (auth()?->user()?->isUser())
                        <form action="{{route('shelf_content.add_to_cart')}}" method="POST">
                            <input type="hidden" name="shelf_content_id" value="{{ $shelf_content->id }}">
                            <input type=number name="quantity" value="1">
                            <input type="submit" value="Add to cart"  class="cart">
                            @endif
                            @endauth
                            @csrf
                        </form>
                    </td>

                    <td>  @auth
                            <ul class="hidden w-8/12 md:flex items-center justify-center space-x-8">
                                <li>
                                </li>
                                @if (auth()?->user()?->isAdmin())
                        <a href="{{route('shelf_contents.edit', $shelf_content->id)}}" class="admin-btn">Edit</a>
                        <form action="{{route('shelf_contents.destroy', $shelf_content->id)}}" class="admin-btn" method="post">
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
</div>
    </body>
@endsection
