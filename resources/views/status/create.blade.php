@extends('layouts.admin.main')

<h1>New </h1>
<span>Kurimo forma</span>
<form action="{{route('statuses.store')}}" method="post">

    @csrf

    <input type="text" name="name" placeholder="Name" value=""><br>
    <input type="text" name="type" placeholder="Type" value=""><br>

    <hr>
    <input type="submit" class="waves-effect waves-light btn" value="Atnaujinti">
</form>


