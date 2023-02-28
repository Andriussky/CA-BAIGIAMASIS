@extends('layouts.admin.main')

<h1>Editing {{$user->name}}</h1>
<span>Redagavimo forma</span>
<form action="{{route('users.update', $user->id)}}" method="post">
    @method('PUT')
    @csrf



    <input type="text" name="name" placeholder="Name" value=""><br>
    <input type="text" name="email" placeholder="Email" value=""><br>
    <input type="password" name="password" placeholder="Password" value=""><br>
    <input type="password" name="password_confirmation" placeholder="confirm_password" value=""><br>
    <select name="role" id="role">
        <option value="admin">Admin</option>
        <option value="user">User</option>
        <option value="manager">Manager</option>
        <option value="prod_manager">Prod_manager</option>
    </select>
    <hr>
    <input type="submit" class="waves-effect waves-light btn" value="Atnaujinti">
    labas
</form>

