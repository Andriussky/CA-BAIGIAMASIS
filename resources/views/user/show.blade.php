<div class="row">
    <div class="col s12 m3">
        <div class="card">
            <div class="card-image">
                <img src="https://picsum.photos/200">
                <span class="card-title"></span>
            </div>
            <div class="card-content">
                <div>ID:{{$user->id}} </div>
                <p>Name:{{$user->name}} </p>
                <p>email:{{$user->email}} </p>
                <p>Creation date:{{ $user->created_at }} </p>
                <p>Last updated:{{ $user->updated_at }} </p>

            </div>
            <div class="card-action">
                <a href="{{ route('users.edit', $user->id) }}"
                   data-tooltip="Redaguoti"
                   class="tooltipped waves-effect waves-light green btn-small">
                    <i class="tiny material-icons">edit</i>
                </a>
                <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit"data-tooltip="Šalinti"
                            class="tooltipped waves-effect waves-light red btn-small">
                        <i class="tiny material-icons">delete</i>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
