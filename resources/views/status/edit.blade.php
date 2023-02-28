@extends('layouts.main')

<h1>Editing {{$status->name}}</h1>
<span>Redagavimo forma</span>
<form action="{{route('statuses.update', $status->id)}}" method="post">
    @method('PUT')
    @csrf



    <input type="text" name="name" placeholder="Name" value=""><br>
    <input type="text" name="type" placeholder="Type" value=""><br>


    <hr>
    <input type="submit" class="waves-effect waves-light btn" value="Atnaujinti">
</form>
