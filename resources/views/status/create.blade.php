@extends('layouts.admin.main')
@section('content')
<body>
<h1>New </h1>

<form action="{{route('statuses.store')}}" method="post" class="edit-form">

    @csrf

    <input type="text" name="name" placeholder="Name" value="" class="input-text"><br>
    <input type="text" name="type" placeholder="Type" value="" class="input-text"><br>

    <input type="submit" class="submit" value="Create">
</form>
</body>

@endsection
