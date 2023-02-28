<div class="row">
    <div class="col s12">
        <h1>People</h1>
        <a href="{{route('persons.create')}}" class="btn btn-primary">Create</a>
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
            @foreach($persons as $person)
                <tr>
                    <td>{{$person->id}}</td>
                    <td>{{$person->name}}</td>
                    <td>{{$person->surname}}</td>
                    <td>
                        <a href="{{route('persons.edit', $person->id)}}" class="btn btn-primary">Edit</a>
                        <form action="{{route('persons.destroy', $person->id)}}" method="post">
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
