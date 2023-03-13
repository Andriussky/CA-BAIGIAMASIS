<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@extends('layouts.admin.main')
@section('content')
    <body>

<h1>Editing {{$user->name}}</h1>
<form action="{{route('users.update', $user->id)}}" method="post" class="edit-form">
    @method('PUT')
    @csrf



    <input type="text" name="name" placeholder="Name" value="" class="input-text"><br>
    <input type="text" name="email" placeholder="Email" value="" class="input-text"><br>
    <input type="password" name="password" placeholder="Password" value="" class="input-text"><br>
    <input type="password" name="password_confirmation" placeholder="confirm_password" value="" class="input-text"><br>
    <select name="role" id="role">
        <option value="admin">Admin</option>
        <option value="user">User</option>
        <option value="manager">Manager</option>
        <option value="prod_manager">Prod_manager</option>
    </select>

    <input type="submit" class="submit" value="Edit">

</form>

</body>
@endsection
