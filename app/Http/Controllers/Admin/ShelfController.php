<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductCollection;
use App\Http\Resources\ProductResource;
use App\Http\Requests\ShelfRequest;
use App\Models\Shelf;

class ShelfController extends Controller
{
    public function index()
    {
        $shelf_contents = Shelf::query()->with(['category', 'status'])->get();

        return view('shelf_contents.index', compact('shelf_contents'));
    }

    public function create()
    {
        return view('shelf_contents.create');
    }

    public function store(ShelfRequest $request)
    {
        $shelf_content = Shelf::create($request->all());

        if ($request->hasFile('image') && $request->file('image')->isValid()) {    // Įkeliame failą į 'public_html/img/products' aplanką
            $image = $request->file('image');
            $clientOriginalName = $image->getClientOriginalName();
            $image->move(public_path('img/products'), $clientOriginalName);
            $shelf_content->image = '/img/products/' . $clientOriginalName;
            $shelf_content->save();
        }

        return redirect()->route('shelf_contents.show', $shelf_content);
    }

    public
    function show(Shelf $shelf_content)
    {
        return view('shelf_contents.show', ['shelf_content' => $shelf_content]);

    }

    public
    function edit(Shelf $shelf_content)
    {
        return view('shelf_contents.edit', compact('shelf_content'));
    }

    public
    function update(ShelfRequest $request, Shelf $shelf_content)
    {
        $shelf_content = Shelf::create($request->all());

        if ($request->hasFile('image') && $request->file('image')->isValid()) {    // Įkeliame failą į 'public_html/img/products' aplanką
            $image = $request->file('image');
            $clientOriginalName = $image->getClientOriginalName();
            $image->move(public_path('img/products'), $clientOriginalName);
            $shelf_content->image = '/img/products/' . $clientOriginalName;
            $shelf_content->save();
        }
        return redirect()->route('shelf_contents.show', $shelf_content);
    }

    public
    function destroy(Shelf $shelf_content)
    {
        $shelf_content->delete();
        return redirect()->route('shelf_contents.index');
    }
}
