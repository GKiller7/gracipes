<div class="position-relative bg-light rounded-4 border border-1 border-secondary shadow-sm p-3 h-100">
    <!-- Recipe Image -->
    <div class="rounded-4 overflow-hidden">
        <a href="{{ asset('img/' . $recipe->images->first()->image) }}" data-fancybox="gallery"
           data-caption="{{ $recipe->name }} #1">
            <img src="{{ asset('img/' . $recipe->images->first()->image) }}" alt="{{ $recipe->name }}" class="img-fluid rounded-top">
        </a>
    </div>

    <!-- Recipe Details -->
    <div class="d-flex flex-column p-3 h-100">
        <h5 class="mb-2 text-dark">
            <a class="text-decoration-none" href="{{ route('recipes.show', $recipe->id) }}">
                {{ $recipe->name }}
            </a>
        </h5>
        <p class="text-muted mb-1">
            {{ $recipe->description }}
        </p>
        <div class="mt-auto">
            <a class="btn btn-outline-dark w-100 mb-1" href="{{ route('recipes.show', $recipe->id) }}">
                View Recipe
            </a>
        </div>
    </div>
</div>
