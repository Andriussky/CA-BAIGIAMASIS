<div class="row">
    <div class="col s12 m3">
        <div class="card">
            <div class="card-image">
                <img src="https://picsum.photos/200">
                <span class="card-title"></span>
            </div>
            <div class="card-content">
                <div>ID:{{$order->id}} </div>
                <p>user_id:{{$order->user_id}} </p>
                <p>shipping_address_id:{{$order->shipping_address_id}} </p>
                <p>billing_address_id:{{$order->billing_address_id}} </p>
                <p>payment_id:{{$order->payment_id}} </p>
                <p>status_id:{{$order->istatus_idd}} </p>
                <p>Creation date:{{$order->created_at}} </p>
                <p>Last updated:{{$order->updated_at}} </p>
            </div>
            <div class="card-action">
                <a href="{{ route('orders.edit', $order->id) }}"
                   data-tooltip="Redaguoti"
                   class="tooltipped waves-effect waves-light green btn-small">
                    <i class="tiny material-icons">edit</i>
                </a>
                <form action="{{ route('orders.destroy', $order->id) }}" method="POST">
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
