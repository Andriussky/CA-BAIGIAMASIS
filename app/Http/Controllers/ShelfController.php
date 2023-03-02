<?php

namespace App\Http\Controllers;

use App\Models\Shelf;

class ShelfController extends Controller
{
    public function show(Shelf $shelf_content)
    {
        return view('shelf_show', ['shelf_content' => $shelf_content]);
    }
}
