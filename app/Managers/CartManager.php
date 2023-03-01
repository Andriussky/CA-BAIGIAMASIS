<?php

namespace App\Managers;

use App\Http\Requests\CartRequest;
use App\Models\OrderDetails;
use App\Models\Shelf;
use App\Models\User;

class CartManager
{
    public function addToCart(CartRequest $request): void
    {
        // Siuo metu prisijunges vartotojas
        /** @var User $user */
        $user = auth()->user();

        $shelf_content = Shelf::find($request->shelf_contents_id);

        $cartItem = OrderDetails::where([
            'order_id'   => $user->getLatestCart()->id,
            'shelf_content_id' => $shelf_content->id,
        ])->first();

        if (!$cartItem) {
            $cartItem = new OrderDetails();
            $cartItem->order_id = $user->getLatestCart()->id;
            $cartItem->shelf_content_id = $shelf_content->id;
            $cartItem->shelf_content_name = $shelf_content->name;
            $cartItem->quantity = $request->quantity;
            $cartItem->price = $shelf_content->price;
            $cartItem->save();
            return;
        }

        $cartItem->increment('quantity', $request->quantity);
    }
}
