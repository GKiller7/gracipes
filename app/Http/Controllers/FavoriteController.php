<?php

namespace App\Http\Controllers;

use App\Models\Recipe;

class FavoriteController extends Controller
{
    public function index()
    {
        $products = Recipe::whereHas('favorites', function ($query) {
            return $query->where('id', auth()->id());
        })
            ->orderBy('id', 'desc')
            ->paginate(30);

        return view('favorites.index')
            ->with([
                'products' => $products,
            ]);
    }

    public function add($slug)
    {
        $recipe = Recipe::where('slug', $slug)
            ->firstOrFail();

        $user = auth()->user();
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
