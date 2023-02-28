<?php

namespace App\Http\Controllers\Admin;


use App\Events\OrderCreated;
use App\Http\Controllers\Controller;
use App\Http\Requests\OrderRequest;
use App\Models\Order;
use App\Models\Status;

class OrdersController extends Controller
{
    public function __construct(){
        $this->authorizeResource(Order::class);
    }
    public function index()
    {
        $orders =  Order::query()->with(['user', 'shippingAddress'])->get();

        return view('order.index', compact('orders'));
    }

    public function create()
    {
        return view('order.create');
    }

    public function store(OrderRequest $request)
    {


        $order = Order::create($request->all());


        return redirect()->route('orders.show', $order);
    }

    public function show(Order $order)
    {
        return view('order.show', ['order' => $order]);

    }

    public function edit(Order $order)
    {
        return view('order.edit', compact('order'));
    }

    public function update(OrderRequest $request, Order $order)
    {


        $order->update($request->all());
        return redirect()->route('order.show', $order);
    }

    public function destroy(Order $order)
    {
        $order->delete();
        return redirect()->route('order.index');
    }
}
