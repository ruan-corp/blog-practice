<?php

namespace App\Http\Controllers;

use App\Http\Requests\Category\CategoryRequest;
use App\Models\Category;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = Category::query()->paginate(15);

        return view('pages.categories.categories-index', ['categories' => $categories]);
    }

    public function create()
    {
        return view('pages.categories.categories-create');
    }

    public function store(CategoryRequest $request)
    {
        $validatedData = $request->validated();

        Category::create($validatedData);

        return redirect()->route('categories.categories')->with('message', ['success' => 'Categoria criada com successo']);
    }

    public function edit(int $id)
    {
        $category = Category::query()->findOrFail($id);

        return view('pages.categories.categories-edit', ['category' => $category]);
    }

    public function update(CategoryRequest $request)
    {
        $category = Category::query()->findOrFail($request->id);
        $validatedData = $request->validated();
        $category->update($validatedData);

        return redirect()->route('categories.categories')->with('message', ['success' => 'Categoria editada com successo']);
    }

    public function destroy(int $id)
    {
        $category = Category::query()->findOrFail($id);

        $category->delete();

        return redirect()->back()->with('message', ['success' => 'Categoria excluida com successo']);
    }
}
