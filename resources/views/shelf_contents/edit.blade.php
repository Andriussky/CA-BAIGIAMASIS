@extends('layouts.admin.main')

@auth
    <ul class="hidden w-8/12 md:flex items-center justify-center space-x-8">
        <li>
        </li>
        @if (auth()?->user()?->isAdmin())

<h1>Editing {{$shelf_content->name}}</h1>
<span>Redagavimo forma</span>
<form action="{{route('shelf_contents.update', $shelf_content->id)}}" method="post" enctype="multipart/form-data">
    @method('PUT')
    @csrf



    <input type="text" name="name" placeholder="Name" value="{{$shelf_content->name}}"><br>
    <input type="text" name="slug" placeholder="Slug" value="{{$shelf_content->slug}}"><br>
    <input type="text" name="description" placeholder="Description" value="{{$shelf_content->description}}"><br>
    <input type="text" name="category_id" placeholder="Category ID" value="{{$shelf_content->category_id}}"><br>
    <input type="text" name="author" placeholder="Author" value="{{$shelf_content->author}}"><br>
    <input type="text" name="pages" placeholder="Pages" value="{{$shelf_content->pages}}"><br>
    <input type="text" name="price" placeholder="Price" value="{{$shelf_content->price}}"><br>
    <input type="text" name="status_id" placeholder="Status ID" value="{{$shelf_content->status_id}}"><br>
    <input type="file" name="image" placeholder="Image" value="{{$shelf_content->image}}"><br>
    <hr>
    <input type="submit" class="waves-effect waves-light btn" value="Atnaujinti">
</form>

@endif
@endauth
