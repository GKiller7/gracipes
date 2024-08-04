<div class="card border-0 shadow-lg rounded-4" style="height: 90%;">
    <!-- Recipe Image -->
    <div class="overflow-hidden rounded-top-4">
        <a href="{{ asset('img/' . $recipe->images->first()->image) }}" data-fancybox="gallery"
           data-caption="{{ $recipe->name }}">
            <img src="{{ asset('img/' . $recipe->images->first()->image) }}" alt="{{ $recipe->name }}" class="img-fluid w-100">
        </a>
    </div>

    <!-- Recipe Details -->
    <div class="card-body d-flex flex-column p-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <!-- Recipe Title -->
            <h5 class="card-title text-dark fw-bold mb-0">
                <a class="text-decoration-none text-dark" href="{{ route('recipes.show', $recipe->id) }}">
                    {{ $recipe->name }}
                </a>
            </h5>

            <!-- Favorites Button -->
            <a class="btn btn-outline-danger btn-sm" href="{{ route('favorites.add',  ['slug' => $recipe->slug]) }}">
                <i class="bi bi-heart"></i>
            </a>
        </div>
        <p class="card-text text-muted mb-4">
            {{ $recipe->description }}
        </p>

        <!-- View Recipe Button -->
        <a class="btn btn-brown text-white mt-auto" href="{{ route('recipes.show', $recipe->id) }}">
            View Recipe
        </a>
    </div>
</div>

<!-- Custom Styles -->
<style>
    .btn-brown {
        background-color: #8B4513;
        border-color: #8B4513;
    }

    .btn-brown:hover {
        background-color: #A0522D;
        border-color: #A0522D;
    }

    .card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Default shadow */
    }

    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 12px 24px rgba(0, 0, 0, 0.2); /* Elevated shadow on hover */
    }

    .img-fluid {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Shadow around the image */
    }

    .img-fluid:hover {
        transform: scale(1.05);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15); /* Elevated shadow on hover */
    }
</style>
