<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    public function index(Request $request, $categoryId)
    {
        $category = Category::with('recipes.images')->findOrFail($categoryId);
        $recipes = $category->recipes;

        return view('recipes.index', compact('category', 'recipes'));
    }

    public function show($id)
    {
        $recipe = Recipe::with('images', 'ingredients', 'steps')->findOrFail($id);
        return view('recipes.show', compact('recipe'));
    }

    public function view(Request $request, $categoryId)
    {
        $category = Category::with('recipes.images')->findOrFail($categoryId);
        $recipes = $category->recipes;

        return view('recipes.index', compact('category', 'recipes'));
    }
}
