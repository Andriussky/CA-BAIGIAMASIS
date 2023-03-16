@extends('layouts.admin.main')
@section('content')

<body>
@auth
    <ul class="hidden w-8/12 md:flex items-center justify-center space-x-8">
        <li>
        </li>
        @if (auth()?->user()?->isAdmin())

<h1>Editing {{$shelf_content->name}}</h1>
<form action="{{route('shelf_contents.update', $shelf_content->id)}}" method="post" enctype="multipart/form-data" class="edit-form">
    @method('PUT')
    @csrf



    <input type="text" name="name" placeholder="Name" value=" {{$shelf_content->name}}" class="input-text"><br>
    <input type="text" name="slug" placeholder="Slug" value="{{$shelf_content->slug}}" class="input-text"><br>
    <input type="text" name="description" placeholder="Description" value="{{$shelf_content->description}}" class="input-text"><br>
    <input type="text" name="category_id" placeholder="Category ID" value="{{$shelf_content->category_id}}" class="input-text"><br>
    <input type="text" name="author" placeholder="Author" value="{{$shelf_content->author}}" class="input-text"><br>
    <input type="text" name="pages" placeholder="Pages" value="{{$shelf_content->pages}}" class="input-text"><br>
    <input type="text" name="price" placeholder="Price" value="{{$shelf_content->price}}" class="input-text"><br>
    <input type="text" name="status_id" placeholder="Status ID" value="{{$shelf_content->status_id}}" class="input-text"><br>
    <input type="file" name="image" placeholder="Image" value="{{$shelf_content->image}}" class="admin-btn"><br>

    <input type="submit" class="submit" value="Edit">
</form>

@endif
@endauth
</body>
@endsection
