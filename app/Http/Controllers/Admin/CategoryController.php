<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories =  Category::query()->with(['parent', 'status'])->get();

        return view('category.index', compact('categories'));
    }

    public function create()
    {
        return view('category.create');
    }

    public function store(CategoryRequest $request)
    {


        $category = category::create($request->all());
        return redirect()->route('categories.show', $category);
    }

    public function show(Category $category)
    {
        return view('category.show', ['category' => $category]);

    }

    public function edit(Category $category)
    {
        return view('category.edit', compact('category'));
    }

    public function update(CategoryRequest $request, Category $category)
    {


        $category->update($request->all());
        return redirect()->route('category.show', $category);
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('categories.index');
    }
}
