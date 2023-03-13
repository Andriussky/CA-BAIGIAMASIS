@extends('layouts.admin.main')
@section('content')
    <body>
<h1>Editing {{$status->name}}</h1>

<form action="{{route('statuses.update', $status->id)}}" method="post" class="edit-form">
    @method('PUT')
    @csrf



    <input type="text" name="name" placeholder="Name" value="" class="input-text"><br>
    <input type="text" name="type" placeholder="Type" value="" class="input-text"><br>



    <input type="submit" class="submit" value="Edit">
</form>
</body>
@endsection
