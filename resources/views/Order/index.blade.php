
@extends('layouts.admin.main')
@section('content')
<body>
<div class="row">
    <div class="col s12">
        <h1>Orders</h1>
        <a href="{{route('orders.create')}}" class="admin-btn">Create</a>
        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Surname</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($orders as $order)
                <tr>
                    <td>{{$order->id}}</td>
                    <td>{{$order->name}}</td>
                    <td>{{$order->surname}}</td>
                    <td>
                        <a href="{{route('orders.edit', $order->id)}}" class="admin-btn">Edit</a>
                        <form action="{{route('orders.destroy', $order->id)}}" class="admin-btn" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
</body>

@endsection
