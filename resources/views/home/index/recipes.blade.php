<div class="border-top py-4">
    <div class="h3 mb-3">Recipes</div>
    <div class="row row-cols-2 row-cols-sm-3 row-cols-lg-4 g-2 g-sm-3">
        @foreach($recipes as $recipe)
            <div class="col">
                @include('app.recipe')
            </div>
        @endforeach
    </div>
</div>
