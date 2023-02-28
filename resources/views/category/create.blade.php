@extends('layouts.main')

<h1>New </h1>
<span>Kurimo forma</span>
<form action="{{route('categories.store')}}" method="post">

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
