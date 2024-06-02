<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;

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
}
