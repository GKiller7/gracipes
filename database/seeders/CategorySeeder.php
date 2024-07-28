<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Image;
use App\Models\Ingredient;
use App\Models\Recipe;
use App\Models\Step;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $categories = [
            ['name' => 'Desserts', 'recipe_names' => [
                'Cheesecake',
                'Tiramisu',
                'Macarons',
                'Baklava',
                'Brownies',
                'Panna Cotta',
                'Croissant',
                'Apple Pie',
                'Pavlova',
                'Gelato',
            ], 'recipe_images' => [
                'desserts/cheesecake.jpg',
                'desserts/tiramisu.jpg',
                'desserts/macarons.jpg',
                'desserts/baklava.jpg',
                'desserts/brownies.jpg',
                'desserts/panna_cotta.jpg',
                'desserts/croissant.jpg',
                'desserts/apple_pie.jpg',
                'desserts/pavlova.jpg',
                'desserts/gelato.jpg',
            ]],
            ['name' => 'Soups', 'recipe_names' => [
                'Dograma',
                'Dolama',
                'Minestrone',
                'French Onion Soup',
                'Gazpacho',
                'Borscht',
                'Chicken Noodle Soup',
                'Miso Soup',
                'Lentil Soup',
                'Clam Chowder',
            ], 'recipe_images' => [
                'soups/dograma.jpg',
                'soups/dolama.jpg',
                'soups/minestrone.jpg',
                'soups/french_union_soup.jpg',
                'soups/gazpacho.jpg',
                'soups/borscht.jpg',
                'soups/chicken_noodle_soup.jpg',
                'soups/miso_soup.jpg',
                'soups/lentil_soup.jpg',
                'soups/clam_chowder.jpg',
            ]],
            ['name' => 'Dough-based dishes', 'recipe_names' => [
                'Somsa',
                'Fitci',
                'Islekli',
                'Gutap',
                'Pizza',
                'Burritos',
                'Empanadas',
                'Samosas',
                'Calzones',
                'Pierogi',
            ], 'recipe_images' => [
                'dough-based_dishes/somsa.jpg',
                'dough-based_dishes/fitci.jpg',
                'dough-based_dishes/islekli.jpg',
                'dough-based_dishes/gutap.jpg',
                'dough-based_dishes/pizza.jpg',
                'dough-based_dishes/burritos.jpg',
                'dough-based_dishes/empanadas.jpg',
                'dough-based_dishes/samosas.jpg',
                'dough-based_dishes/calzones.jpg',
                'dough-based_dishes/pierogi.jpg',
            ]],
            ['name' => 'Main Dishes', 'recipe_names' => [
                'Burger',
                'Sushi',
                'Steak',
                'Paella',
                'Lasagna',
                'Chicken Tikka Masala',
                'Beef Stroganoff',
                'Chili con Carne',
                'Ratatouille',
                'Shawarma',
            ], 'recipe_images' => [
                'main_dishes/burger.jpg',
                'main_dishes/sushi.jpg',
                'main_dishes/steak.jpg',
                'main_dishes/paella.jpg',
                'main_dishes/lasagna.jpg',
                'main_dishes/chicken_tikka_masala.jpg',
                'main_dishes/beef_stroganoff.jpg',
                'main_dishes/chili_con_carne.jpg',
                'main_dishes/ratatouille.jpg',
                'main_dishes/shawarma.jpg',
            ]],
        ];

        foreach ($categories as $category_name) {
            $category = Category::create([
                'name' => $category_name['name'],
            ]);

            foreach ($category_name['recipe_names'] as $index => $recipe_name) {
                $recipe = Recipe::create([
                    'category_id' => $category->id,
                    'name' => $recipe_name,
                    'description' => fake()->paragraph(),
                    'rating' => fake()->randomFloat(2, 0, 5),
                ]);

                Image::create([
                    'recipe_id' => $recipe->id,
                    'image' => $category_name['recipe_images'][$index],
                ]);

                // Ingredient ve Step eklemek
                for ($i = 0; $i < 5; $i++) { // 5 adet ingredient ve step ekleyelim.
                    Ingredient::create([
                        'recipe_id' => $recipe->id,
                        'name' => fake()->word,
                    ]);

                    Step::create([
                        'recipe_id' => $recipe->id,
                        'description' => fake()->sentence,
                    ]);
                }
            }
        }
    }
}
