@extends('layouts.admin.main')
@section('content')

<div class="row">
    <div class="col s12 m3">
        <div class="card">
            <div class="card-image">
                <img src="https://picsum.photos/200">
                <span class="card-title"></span>
            </div>
            <div class="card-content">
                <div>ID:{{$category->id}} </div>
                <p>Name:{{$category->name}} </p>
                <p>Slug:{{$category->slug}} </p>
                <p>Description:{{$category->description}} </p>
                <p>Image:{{$category->image}} </p>
                <p>Status: {{$category->status}}</p>
                <p>Sort_order:{{$category->sort_order}} </p>
                <p>Creation date{{$category->created_at}}: </p>
                <p>Last updated:{{$category->updated_at}} </p>
            </div>
           @foreach($category->children as $child)

                <a href="{{route('category.show', $child->slug)}}" >{{$child->name}}</a>
            @endforeach
            @foreach($shelf_contents as $shelf)
      {{$shelf->name}}

            @endforeach




    </div>
</div>
@endsection
