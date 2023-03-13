<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@extends('layouts.admin.main')
@section('content')
    <body>

<h1>New </h1>

<form action="{{route('users.store')}}" method="post" class="edit-form">
    @csrf

    <input type="text" name="name" placeholder="Name" value="" class="input-text"><br>
    <input type="text" name="email" placeholder="Email" value="" class="input-text"><br>
    <input type="password" name="password" placeholder="Password" value="" class="input-text"><br>
    <input type="password" name="password_confirmation" placeholder="confirm_password" value="" class="input-text"><br>




    <input type="submit" class="submit" value="Create">


</form>
    </body>

@endsection
