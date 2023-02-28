@extends('layouts.main')

<h1>Editing {{$category->name}}</h1>
<span>Redagavimo forma</span>
<form action="{{route('categories.update', $category->id)}}" method="post">
    @method('PUT')
    @csrf


    <input type="text" name="name" placeholder="Name" value=""><br>
    <input type="text" name="slug" placeholder="Slug" value=""><br>
    <input type="text" name="description" placeholder="Description" value=""><br>
    <input type="text" name="image" placeholder="Image" value=""><br>
    <input type="text" name="status" placeholder="Status" value=""><br>
    <input type="text" name="sort_order" placeholder="Sort_order" value=""><br>

    <hr>
    <input type="submit" class="waves-effect waves-light btn" value="Atnaujinti">
</form>
