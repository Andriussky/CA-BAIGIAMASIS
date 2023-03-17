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
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Image</th>
            <th>Price</th>
            <th>Action</th>
            <th>Admin</th>
        </tr>
        </thead>
        <body>
        @foreach($shelf_contents as $shelf_content)
            <tr class="shelf-content-row">
                <td>{{$shelf_content->id}}</td>
                <td>
                    <a href="{{ route('shelf_content.show', $shelf_content->slug) }}" class="admin-btn">
                        {{ $shelf_content->name }}
                    </a>
                </td>
                <td><img src="{{$shelf_content->image}}" alt="" class="foto"></td>
                <td>{{$shelf_content->price}}</td>
                <td>
                    @auth
                        @if (auth()->user()->isUser())
                            <form action="{{route('shelf_content.add_to_cart')}}" method="POST">
                                <input type="hidden" name="shelf_content_id" value="{{ $shelf_content->id }}">
                                <input type=number name="quantity" value="1">
                                <input type="submit" value="Add to cart"  class="cart">
                            </form>
                        @endif
                    @endauth
                </td>
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
    <script>
    const searchForm = document.getElementById('searchForm');
    const searchInput = document.getElementById('searchInput');
    const shelfContentRows = document.querySelectorAll('.shelf-content-row');

    searchForm.addEventListener('submit', (e) => {
    e.preventDefault();

    const searchQuery = searchInput.value.toLowerCase();

    shelfContentRows.forEach((row) => {
    const nameCell = row.querySelector('td:nth-child(2)');

    if (nameCell.innerText.toLowerCase().includes(searchQuery)) {
    row.style.display = '';
    } else {
    row.style.display = 'none';
    }
    });
    });
   </script>
    </body>
@endsection
