@extends('layouts.admin.main')

@section('content')
    <body>
    <div class="row">
        <div class="col s12 m3">
            <div class="card">
                <div class="card-image">
                    <img src="{{$shelf_content->image}}">
                    <span class="card-title">{{ $shelf_content->name }}</span>
                </div>
                <div class="card-content">
                    <p>Price: {{ $shelf_content->price }}</p>
                    <div>ID: {{$shelf_content->id}}</div>
                    <div class="card-content" style="max-width: 500px; overflow-x: auto;">
                        <p>Description: {{ $shelf_content->description }}</p>
                    </div>
                    @auth
                        <ul class="hidden w-8/12 md:flex items-center justify-center space-x-8">
                            <li>
                            </li>
                            @if (auth()?->user()?->isAdmin())
                                <p>Creation date: {{ $shelf_content->created_at }}</p>
                                <p>Last updated: {{ $shelf_content->updated_at }}</p>
                            @endif
                            @endauth
                            <td><img src="{{$shelf_content->image}}" alt="" class="foto"></td>
                </div>
                <div class="card-action">
                    <a href="{{ route('shelf_contents.edit', $shelf_content->id) }}"
                       data-tooltip="Redaguoti"
                       class="admin-btn">
                        <i class="tiny material-icons">edit</i>
                    </a>
                    <form action="{{ route('shelf_contents.destroy', $shelf_content->id) }}" class="admin-btn"
                          method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" data-tooltip="Delete"
                                class="tooltipped waves-effect waves-light red btn-small">
                            <i class="tiny material-icons">delete</i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </body>
@endsection
