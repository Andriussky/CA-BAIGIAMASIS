<div class="row">
    <div class="col s12 m3">
        <div class="card">
            <div class="card-image">
                <img src="https://picsum.photos/200">
                <span class="card-title"></span>
            </div>
            <div class="card-content">
                <div>ID:{{$address->id}} </div>
                <p>Name:{{$address->name}} </p>
                <p>Country:{{$address->country}} </p>
                <p>City:{{$address->city}} </p>
                <p>Zip:{{$address->zip}} </p>
                <p>Street: {{$address->street}}</p>
                <p>House_number:{{$address->house_number}} </p>
                <p>Apartment_number:{{$address->apartment_number}} </p>
                <p>State:{{$address->state}} </p>
                <p>Type:{{$address->type}} </p>
                <p>Additional_info:{{$address->additional_info}} </p>
                <p>Email:{{$address->email}} </p>
                <p>Creation date{{$address->created_at}}: </p>
                <p>Last updated:{{$address->updated_at}} </p>
            </div>
            <div class="card-action">
                <a href="{{ route('addresses.edit', $address->id) }}"
                   data-tooltip="Redaguoti"
                   class="tooltipped waves-effect waves-light green btn-small">
                    <i class="tiny material-icons">edit</i>
                </a>
                <form action="{{ route('addresses.destroy', $address->id) }}" method="POST">
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
