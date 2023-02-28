@extends('layouts.main')

<h1>Editing {{$address->name}}</h1>
<span>Redagavimo forma</span>
<form action="{{route('addresses.update', $address->id)}}" method="post">
    @method('PUT')


    @csrf


    <input type="text" name="name" placeholder="Name" value=""><br>
    <input type="text" name="country" placeholder="Country" value=""><br>
    <input type="text" name="city" placeholder="City" value=""><br>
    <input type="text" name="zip" placeholder="Zip" value=""><br>
    <input type="text" name="street" placeholder="Street" value=""><br>
    <input type="text" name="house_number" placeholder="House_number" value=""><br>
    <input type="text" name="apartment_number" placeholder="Apartment_number" value=""><br>
    <input type="text" name="state" placeholder="State" value=""><br>
    <input type="text" name="type" placeholder="Type" value=""><br>
    <input type="text" name="additional_info" placeholder="Additional_info" value=""><br>
    <input type="text" name="email" placeholder="Email" value=""><br>
    <input type="text" name="user_id" placeholder="User_id" value=""><br>


    <hr>
    <input type="submit" class="waves-effect waves-light btn" value="Atnaujinti">
</form>
