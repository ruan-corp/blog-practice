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
        $request->validate([
            'name' => 'required|unique:categories,name|max:255',
            'description' => 'nullable|max:255',
        ]);

        $category = new Categories();
        $category->name = $request->name;
        $category->description = $request->description;
        $category->slug = Str::slug($request->name);
        $category->save();

        return redirect()->back()->with('success', 'Categoria Criada com successo');
    }
}
