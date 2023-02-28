@extends('layouts.admin.main')

<h1>Editing {{$order->user_id}}</h1>
<span>Redagavimo forma</span>
<form action="{{route('orders.update', $order->id)}}" method="post">
    @method('PUT')
    @csrf



    <input type="text" name="user_id" placeholder="User_id" value=""><br>
    <input type="text" name="shipping_address_id" placeholder="Shipping_address_id" value=""><br>
    <input type="text" name="billing_address_id" placeholder="Billing_address_id" value=""><br>
    <input type="text" name="payment_id" placeholder="Payment_id" value=""><br>
    <input type="text" name="status_id" placeholder="Status_id" value=""><br>

    <hr>
    <input type="submit" class="waves-effect waves-light btn" value="Atnaujinti">
</form>
