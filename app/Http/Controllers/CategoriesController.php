<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = Category::query()->get();

        return view('sections.categories.categories-page', ['categories' => $categories]);
    }

    public function create()
    {
        return view('sections.categories.create-category');
    }

    public function store(CategoryRequest $request)
    {
        $validatedData = $request->validated();

        Category::create($validatedData);

        return redirect()->route('categories.categories')->with('success', 'Categoria criada com successo');
    }

    public function show(int $id)
    {
        $category = Category::query()->findOrFail($id);

        return view('sections.categories.edit-category', ['category' => $category]);
    }

    public function update(CategoryRequest $request)
    {
        $category = Category::query()->findOrFail($request->id);
        $validatedData = $request->validated();
        $category->update($validatedData);

        return redirect()->route('categories.categories')->with('success', 'Categoria editada com successo');
    }

    public function destroy(int $id)
    {
        $category = Category::query()->findOrFail($id);

        if ($category->delete()) {
            return redirect()->back()->with('success', 'Categoria excluida com successo');
        }
    }
}
