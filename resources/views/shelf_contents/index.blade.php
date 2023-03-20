{{--<link rel="stylesheet" href="{{ asset('css/grid.css') }}">--}}

@extends('layouts.admin.main')
@section('content')
    <div class="searchBar">
        <form id="searchForm" method="GET">
            <input type="text" id="searchInput" name="search" placeholder="Search...">
            <button type="submit" id="searchButton">Search</button>
        </form>
    </div>

    <table>
        @auth
            @if (auth()->user()->isAdmin())
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Image</th>
            <th>Price</th>
            <th>Action</th>
        </tr>
        </thead>
            @endif
        @endauth
        <body>
        @foreach($shelf_contents as $shelf_content)
            <tr class="shelf-content-row">

                @auth
                    @if (auth()->user()->isAdmin())

                <td>{{$shelf_content->id}}</td>

                    @endif
                @endauth
                <td>
                    <a href="{{ route('shelf_content.show', $shelf_content->slug) }}" class="admin-btn">
                        {{ $shelf_content->name }}
                    </a>
                </td>
                <td><img src="{{$shelf_content->image}}" alt="" class="foto"></td>
                <td>{{$shelf_content->price}}</td>

                <td>
                    @auth
                        @if (auth()->user()->isAdmin())
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

    </table>


    </table>
    </div>
    </div>

    </body>
@endsection
