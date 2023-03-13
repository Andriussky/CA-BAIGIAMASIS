@extends('layouts.admin.main')

@auth
    <ul class="hidden w-8/12 md:flex items-center justify-center space-x-8">
        <li>
        </li>
        @if (auth()?->user()?->isAdmin())

<h1>New </h1>
<span>Kurimo forma</span>
<form action="{{route('shelf_contents.store')}}" method="post" enctype="multipart/form-data">


    @csrf

    <h1>Create Post</h1>



    <input type="text" name="name" placeholder="Name" value=""><br>
    <input type="text" name="slug" placeholder="Slug" value=""><br>
    <input type="text" name="description" placeholder="Description" value=""><br>
    <input type="text" name="category_id" placeholder="Category ID" value=""><br>
    <input type="text" name="author" placeholder="Author" value=""><br>
    <input type="text" name="pages" placeholder="Pages" value=""><br>
    <input type="text" name="price" placeholder="Price" value=""><br>
    <input type="text" name="status_id" placeholder="Status ID" value=""><br>
    <input type="file" name="image" placeholder="Image" value=""><br>

    <hr>
    <input type="submit" class="submit" value="Atnaujinti">
</form>
@endif
@endauth
