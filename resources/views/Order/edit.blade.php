
@extends('layouts.admin.main')
@section('content')
<body>
<h1>Editing {{$order->user_id}}</h1>
<form action="{{route('orders.update', $order->id)}}" method="post" class="edit-form">
    @method('PUT')
    @csrf



    <input type="text" name="user_id" placeholder="User_id" value="" class="input-text"><br>
    <input type="text" name="shipping_address_id" placeholder="Shipping_address_id" value="" class="input-text"><br>
    <input type="text" name="billing_address_id" placeholder="Billing_address_id" value="" class="input-text"><br>
    <input type="text" name="payment_id" placeholder="Payment_id" value="" class="input-text"><br>
    <input type="text" name="status_id" placeholder="Status_id" value="" class="input-text"><br>


    <input type="submit" class="submit" value="Edit">
</form>
</body>
@endsection
