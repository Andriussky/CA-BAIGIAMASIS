
@extends('layouts.admin.main')
@section('content')
    <body>
<h1>New  </h1>
<form action="{{route('orders.store')}}" method="post" class="edit-form">

    @csrf



    <input type="text"  name="user_id"  placeholder="User_id" value="" class="input-text"><br>
    <input type="text" name="shipping_address_id" placeholder="Shipping_address_id" value="" class="input-text"><br>
    <input type="text" name="billing_address_id" placeholder="Billing_address_id" value="" class="input-text"><br>
    <input type="text" name="payment_id" placeholder="Payment_id" value="" class="input-text"><br>
    <input type="text" name="status_id" placeholder="Status_id" value="" class="input-text"><br>


    <input type="submit" class="submit" value="Create">
</form>
    </body>
@endsection
