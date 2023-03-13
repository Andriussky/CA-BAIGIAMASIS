<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@extends('layouts.admin.main')
@section('content')
    <body>

<h1>Editing {{$address->name}}</h1>

<form action="{{route('addresses.update', $address->id)}}" method="post" class="edit-form">
    @method('PUT')


    @csrf


    <input type="text" name="name" placeholder="Name" value="" class="input-text"><br>
    <input type="text" name="country" placeholder="Country" value="" class="input-text"><br>
    <input type="text" name="city" placeholder="City" value="" class="input-text"><br>
    <input type="text" name="zip" placeholder="Zip" value="" class="input-text"><br>
    <input type="text" name="street" placeholder="Street" value="" class="input-text"><br>
    <input type="text" name="house_number" placeholder="House_number" value="" class="input-text"><br>
    <input type="text" name="apartment_number" placeholder="Apartment_number" value="" class="input-text"><br>
    <input type="text" name="state" placeholder="State" value="" class="input-text"><br>
    <input type="text" name="type" placeholder="Type" value="" class="input-text"><br>
    <input type="text" name="additional_info" placeholder="Additional_info" value="" class="input-text"><br>
    <input type="text" name="email" placeholder="Email" value="" class="input-text"><br>
    <input type="text" name="user_id" placeholder="User_id" value="" class="input-text"><br>



    <input type="submit" class="submit" value="Edit">
</form>
</body>

@endsection
