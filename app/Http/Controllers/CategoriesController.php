<?php

namespace App\Http\Controllers;

use App\Http\Requests\Category\CategoryRequest;
use App\Models\Category;
use Throwable;

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

        return redirect()->route('categories.categories')->with('message', ['success' => 'Categoria criada com successo']);
    }

    public function show(int $id)
    {
        $category = Category::query()->findOrFail($id);

        return view('sections.categories.edit-category', ['category' => $category]);
    }

    public function update(CategoryRequest $request)
    {
        try {
            $category = Category::query()->findOrFail($request->id);
            $validatedData = $request->validated();
            $category->update($validatedData);

            return redirect()->route('categories.categories')->with('message', ['success' => 'Categoria editada com successo']);
        } catch (Throwable $th) {
            return redirect()->back()->with('message', ['error' => 'Não foi possivel encontrar a categoria']);
        }
    }

    public function destroy(int $id)
    {
        try {
            $category = Category::query()->findOrFail($id);

            $category->delete();

            return redirect()->back()->with('message', ['success' => 'Categoria excluida com successo']);
        } catch (Throwable $th) {
            return redirect()->back()->with('message', ['error' => 'Não foi possivel encontrar a categoria']);
        }
    }
}
