<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Recipe;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::with('recipes.images')
            ->with('recipes')
            ->orderBy('name')
            ->get();

        $recipes = Recipe::with('images')
            ->orderBy('name', 'desc')
            ->get();

        return view('home.index')
            ->with([
                'categories' => $categories,
                'recipes' => $recipes,
            ]);
    }
}
