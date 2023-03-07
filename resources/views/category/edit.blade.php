@extends('layouts.admin.main')

@auth
    <ul class="hidden w-8/12 md:flex items-center justify-center space-x-8">
        <li>
        </li>
        @if (auth()?->user()?->isAdmin())



        <h1>Editing {{$category->name}}</h1>
<span>Redagavimo forma</span>
<form action="{{route('categories.update', $category->id)}}" method="post">
    @method('PUT')
    @csrf


    <input type="text" name="name" placeholder="Name" value=""><br>
    <input type="text" name="slug" placeholder="Slug" value=""><br>
    <input type="text" name="description" placeholder="Description" value=""><br>
    <input type="file" name="image" placeholder="Image" value=""><br>
    <input type="text" name="status_id" placeholder="Status ID" value=""><br>
    <input type="text" name="parent_id" placeholder="Parent ID" value=""><br>
    <input type="text" name="sort_order" placeholder="Sort_order" value=""><br>

    <hr>
    <input type="submit" class="waves-effect waves-light btn" value="Atnaujinti">
</form>

@endif
@endauth
