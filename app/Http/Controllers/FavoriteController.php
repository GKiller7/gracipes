<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Recipe;

class FavoriteController extends Controller
{
    public function index()
    {
        $recipes = Recipe::whereHas('favorites', function ($query) {
            return $query->where('id', auth()->id());
        })
            ->orderBy('id', 'desc')
            ->paginate(30);

        return view('favorites.index')
            ->with([
                'recipes' => $recipes,
            ]);
    }

    public function app()
    {
        $recipes = Recipe::whereHas('favorites', function ($query) {
            return $query->where('id', auth()->id());
        })
            ->orderBy('id', 'desc')
            ->paginate(30);

        return view('favorites.index')
            ->with([
                'recipes' => $recipes,
            ]);
    }

    public function favorites()
    {
        $categories = Category::with('recipes.images')
            ->with('recipes')
            ->orderBy('name')
            ->get();

        $recipes = Recipe::with('images')
            ->orderBy('name', 'desc')
            ->get();

        return view('app.nav')
            ->with([
                'categories' => $categories,
                'recipes' => $recipes,
            ]);
    }

    public function add($slug)
    {
        // Oturum açmış bir kullanıcı olup olmadığını kontrol et
        $user = auth()->user();
        if (!$user) {
            return redirect()->route('login')->with('error', 'You must be logged in to add favorites.');
        }

        $recipe = Recipe::where('slug', $slug)
            ->firstOrFail();

        $user->favorites()->toggle($recipe->id);

        if ($user->favorites()->where('id', $recipe->id)->count() > 0) {
            $recipe->increment('favorites');
            $success = 'Added to favorites!';
        } else {
            $recipe->decrement('favorites');
            $success = 'Removed from favorites!';
        }

        return redirect()->back()
            ->with([
                'success' => $success,
            ]);
    }
}
