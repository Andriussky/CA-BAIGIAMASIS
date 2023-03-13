<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@extends('layouts.admin.main')
@section('content')
    <body>


    <h1>Editing {{$person->name}}</h1>

<form action="{{route('persons.update', $person->id)}}" method="post" class="edit-form">
    @method('PUT')
    @csrf



    <input type="text" name="name" placeholder="Name" value="" class="input-text"><br>
    <input type="text" name="surname" placeholder="Surname" value="" class="input-text"><br>
    <input type="text" name="personal_code" placeholder="Personal_code" value="" class="input-text"><br>
    <input type="text" name="email" placeholder="Email" value="" class="input-text"><br>
    <input type="text" name="phone" placeholder="Phone" value="" class="input-text"><br>


    <input type="submit" class="submit" value="Atnaujinti">
</form>
</body>
@endsection
