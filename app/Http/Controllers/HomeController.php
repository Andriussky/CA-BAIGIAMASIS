<?php

namespace App\Http\Controllers;

use App\Models\Shelf;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param Request $request
     * @return Application|Factory|View
     */
    public function __invoke(Request $request)
    {

     $shelf_contents = Shelf::latest()->paginate(4);
     return view('welcome', ['shelf_contents' => $shelf_contents]);


    }
}
