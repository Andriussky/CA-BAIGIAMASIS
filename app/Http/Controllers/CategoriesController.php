<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Shelf;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function show(Category $category)
    {
        $shelf_contents = Shelf::where(['category_id' => $category->id])->get();

        return view('categories.show', ['category' => $category, 'shelf_contents' => $shelf_contents]);


    }




}
