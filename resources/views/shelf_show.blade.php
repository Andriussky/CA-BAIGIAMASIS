@extends('layouts.admin.main')
@section('content')
Pavadinimas: {{ $shelf_content->name }}<br>
Kategorija: {{ $shelf_content->category }}<br>
Aprašymas: {{ $shelf_content->description }}<br>
Autorius: {{ $shelf_content->author }}<br>
Puslapiai: {{ $shelf_content->pages }}<br>
Kaina: {{ $shelf_content->price }}<br>
<br>
<form action="{{route('shelf_content.add_to_cart')}}" method="POST">
    <input type="hidden" name="shelf_content_id" value="{{ $shelf_content->id }}">
    <input type=number name="quantity" value="1">
    <input type="submit" value="Į krepšelį">
    @csrf
</form>

    @endsection
