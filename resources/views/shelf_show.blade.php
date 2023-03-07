@extends('layouts.admin.main')
@section('content')
Name: {{ $shelf_content->name }}<br>
Category: {{ $shelf_content->category }}<br>
Description: {{ $shelf_content->description }}<br>
Author: {{ $shelf_content->author }}<br>
Pages: {{ $shelf_content->pages }}<br>
Price: {{ $shelf_content->price }}<br>
<br>
<form action="{{route('shelf_content.add_to_cart')}}" method="POST">
    <input type="hidden" name="shelf_content_id" value="{{ $shelf_content->id }}">
    <input type=number name="quantity" value="1">
    <input type="submit" value="Į krepšelį">
    @csrf
</form>

    @endsection
