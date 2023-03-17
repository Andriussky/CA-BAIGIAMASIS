@extends('layouts.admin.main')
@section('content')

<div class="row">
    <div class="col s12 m3">
        <div class="card">
            <div class="card-image">
{{--                <img src="https://picsum.photos/200">--}}
                <span class="card-title"></span>
            </div>
            <div class="card-content">
                <p>{{$category->name}} </p>

                @auth
                    <ul class="hidden w-8/12 md:flex items-center justify-center space-x-8">
                        <li>
                        </li>
                        @if (auth()?->user()?->isAdmin())
                            <div>ID:{{$category->id}} </div>
                <p>Slug:{{$category->slug}} </p>
{{--                <p>Status: {{$category->status}}</p>--}}
                <p>Creation date{{$category->created_at}}: </p>
                <p>Last updated:{{$category->updated_at}} </p>


            </div>
            @endif
            @endauth
           @foreach($category->children as $child)

                <a href="{{route('category.show', $child->slug)}}"  class="admin-btn">{{$child->name}}</a>
            @endforeach
            @foreach($shelf_contents as $shelf_content)
                <td>
                    <a href="{{ route('shelf_content.show', $shelf_content->slug) }}" class="admin-btn">{{ $shelf_content->name }}</a>
                </td>
                <td><img src="{{$shelf_content->image}}" alt="" class="foto"></td>
            @endforeach




    </div>
</div>
@endsection
