<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidateCategory;
use App\Models\Categories;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = Categories::all();

        return view('sections.categories.categories-page', ['categories' => $categories]);
    }

    public function createCategory()
    {
        return view('sections.categories.create-category');
    }

    public function store(ValidateCategory $request)
    {
        $request->merge(['slug' => Str::slug($request->name)]);
        $request->validated();

        $category = new Categories();
        $category->name = $request->name;
        $category->description = $request->description;
        $category->slug = $request->slug;
        $category->save();

        return redirect()->route('categories.categories')->with('success', 'Categoria criada com successo');
    }

    public function show($id)
    {
        $category = Categories::find($id);

        return view('sections.categories.edit-category', ['category' => $category]);
    }

    public function update(ValidateCategory $request, $id)
    {
        $category = Categories::find($id);

        if ($category->name == $request->name && $category->description == $request->description) {
            return redirect()->back()->with('success', 'Nenhuma mudança feita');
        }

        $request->merge(['slug' => Str::slug($request->name)]);
        $request->validated();

        if ($category->name != $request->name) {
            $category->name = $request->name;
            $category->slug = $request->slug;
        }
        if ($category->description != $request->description) {
            $category->description = $request->description;
        }

        $category->save();
        return redirect()->back()->with('success', 'Categoria editada com successo');
    }

    public function destroy($id)
    {
        $category = Categories::find($id);

        if ($category->delete()) {
            return redirect()->back()->with('success', 'Categoria excluida com successo');
        }
    }
}
