@extends('layouts.admin.main')

<div class="row">
    <div class="col s12">
        <h1>Shelf</h1>
        <a href="{{route('shelf_contents.create')}}" class="btn btn-primary">Create</a>
        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>{{__('shelf_contents.name')}}</th>
                <th>{{__('shelf_contents.price')}}</th>
                <th>{{__('shelf_contents.actions')}}</th>
            </tr>
            </thead>
            <tbody>
            @foreach($shelf_contents as $shelf_content)
                <tr>
                    <td>{{$shelf_content->id}}</td>
                    <td>{{$shelf_content->name}}</td>
                    <td>{{$shelf_content->price}}</td>
                    <td>  <img src="{{$shelf_content->image}}" alt=""></td>
                    <td>
                        <a href="{{route('$shelf_contents.edit', $shelf_content->id)}}" class="btn btn-primary">Edit</a>
                        <form action="{{route('$shelf_contents.destroy', $shelf_content->id)}}" method="post">
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
