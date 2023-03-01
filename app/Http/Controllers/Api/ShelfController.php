<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ShelfCollection;
use App\Http\Resources\ShelfResource;
use App\Models\Shelf;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ShelfController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $shelf_contents = Shelf::all();

        return response(new ShelfCollection($shelf_contents));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return ShelfResource
     */
    public function show($id)
    {
        $shelf_content = Shelf::first();

        return new ShelfResource($shelf_content);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
