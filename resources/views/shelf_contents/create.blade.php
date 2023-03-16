@extends('layouts.admin.main')
@section('content')
    <body>
@auth
    <ul class="hidden w-8/12 md:flex items-center justify-center space-x-8">
        <li>
        </li>
        @if (auth()?->user()?->isAdmin())

<h1>New </h1>

<form action="{{route('shelf_contents.store')}}" method="post" enctype="multipart/form-data" class="edit-form">


    @csrf

    <h1>Create Post</h1>



    <input type="text" name="name" placeholder="Name" value="" class="input-text"><br>
    <input type="text" name="slug" placeholder="Slug" value="" class="input-text"><br>
    <input type="text" name="description" placeholder="Description" value="" class="input-text"><br>
    <input type="text" name="category_id" placeholder="Category ID" value="" class="input-text"><br>
    <input type="text" name="author" placeholder="Author" value="" class="input-text"><br>
    <input type="text" name="pages" placeholder="Pages" value="" class="input-text"><br>
    <input type="text" name="price" placeholder="Price" value="" class="input-text"><br>
    <input type="text" name="status_id" placeholder="Status ID" value="" class="input-text"><br>
    <input type="file" name="image" placeholder="Image" value="" class="admin-btn"><br>


    <input type="submit" class="submit" value=" Create">
</form>
@endif
@endauth
    </body>
@endsection
