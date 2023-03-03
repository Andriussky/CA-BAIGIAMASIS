<?php

namespace App\Http\Controllers;

use App\Http\Requests\CartShelfUpdateRequest;
use App\Http\Requests\CartRequest;
use App\Managers\CartManager;
use App\Models\Order;
use App\Models\Shelf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function __construct(private readonly CartManager $manager)
    {
    }


    public function create(CartRequest $request)
    {$this->manager->addToCart($request);

        return redirect()->back()->with('success', __('messages.shelf_content_added_to_cart'));
    }

    public function show()
    {
        return view('order.order-summary', [
            'cart' => auth()->user()?->getLatestCart() ?? new Order(),
        ]);
    }

    public function update(CartShelfUpdateRequest $request, Shelf $shelf_content)
    {
        $this->manager->changeQuantity($shelf_content, $request->quantity);

        return redirect()->back()->with('success', __('messages.cart_updated', ['shelf_content' => $shelf_content->name]));
    }

    public function destroy(Shelf $shelf_content)
    {
        $this->manager->removeFromCart($shelf_content);

        return redirect()->back()->with('success', __('messages.shelf_content_removed_from_cart', ['shelf_content' => $shelf_content->name]));
    }
}
