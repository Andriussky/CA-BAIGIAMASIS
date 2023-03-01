@extends('layouts.admin.main')

<h1>New </h1>
<span>Kurimo forma</span>
<form action="{{route('persons.store')}}" method="post">

    @csrf



    <input type="text" name="name" placeholder="Name" value=""><br>
    <input type="text" name="surname" placeholder="Surname" value=""><br>
    <input type="text" name="personal_code" placeholder="Personal_code" value=""><br>
    <input type="text" name="email" placeholder="Email" value=""><br>
    <input type="text" name="phone" placeholder="Phone" value=""><br>


    <hr>
    <input type="submit" class="waves-effect waves-light btn" value="Atnaujinti">
</form>
