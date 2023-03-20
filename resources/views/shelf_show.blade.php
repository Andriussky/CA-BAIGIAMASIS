@extends('layouts.admin.main')
@section('content')
Name: {{ $shelf_content->name }}<br>
<div class="card-content" style="max-width: 500px; overflow-x: auto;">

</div>
Author: {{ $shelf_content->author }}<br>
Pages: {{ $shelf_content->pages }}<br>
Price: {{ $shelf_content->price }}<br>
<td>  <img src="{{$shelf_content->image}}" alt="" class="foto"></td>
<p>Description: {{ $shelf_content->description }}</p>
<br>

@auth
    <ul class="hidden w-8/12 md:flex items-center justify-center space-x-8">
        <li>
        </li>
        @if (auth()?->user()?->isUser())

<form action="{{route('shelf_content.add_to_cart')}}" method="POST">
    <input type="hidden" name="shelf_content_id" value="{{ $shelf_content->id }}">
    <input type="number" name="quantity" value="1" min="1" max="5">
    <input type="submit" value="Add to cart" class="cart">
    @csrf
</form>
@endif
@endauth
    @endsection
