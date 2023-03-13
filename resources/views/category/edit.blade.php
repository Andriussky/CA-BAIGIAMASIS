@extends('layouts.admin.main')
@section('content')
    <body>

@auth
    <ul class="hidden w-8/12 md:flex items-center justify-center space-x-8">
        <li>
        </li>
        @if (auth()?->user()?->isAdmin())



        <h1>Editing {{$category->name}}</h1>

<form action="{{route('categories.update', $category->id)}}" method="post" class="edit-form">
    @method('PUT')
    @csrf


    <input type="text" name="name" placeholder="Name" value="" class="input-text"><br>
    <input type="text" name="slug" placeholder="Slug" value="" class="input-text"><br>
    <input type="text" name="description" placeholder="Description" value="" class="input-text"><br>
    <input type="text" name="status_id" placeholder="Status ID" value="" class="input-text"><br>
    <input type="text" name="parent_id" placeholder="Parent ID" value="" class="input-text"><br>
    <input type="text" name="sort_order" placeholder="Sort_order" value="" class="input-text"><br>
    <input type="file" name="image" placeholder="Image" value="" class="admin-btn"><br>


    <input type="submit" class="submit" value="Edit">
</form>

@endif
@endauth
    </body>
@endsection
