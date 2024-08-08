<div class="card border-0 shadow-lg rounded-4" style="height: 100%; max-width: 20rem; margin: auto;">
    <!-- Recipe Image -->
    <div class="overflow-hidden rounded-top-4 position-relative">
        <a href="{{ asset('img/' . $recipe->images->first()->image) }}" data-fancybox="gallery"
           data-caption="{{ $recipe->name }}">
            <img src="{{ asset('img/' . $recipe->images->first()->image) }}" alt="{{ $recipe->name }}" class="img-fluid w-100 rounded-top-4">
        </a>
        <div class="position-absolute top-0 end-0 p-2">
            <!-- Favorites Button -->
            @auth
                <a class="btn btn-outline-danger btn-sm rounded-circle {{ auth()->user()->favorites->contains($recipe->id) ? 'btn-danger' : '' }}" href="{{ route('favorites.add', $recipe->slug) }}">
                    <i class="bi bi-heart{{ auth()->user()->favorites->contains($recipe->id) ? '-fill' : '' }}"></i>
                </a>
            @else
                <a class="btn btn-outline-danger btn-sm rounded-circle" href="{{ route('login') }}">
                    <i class="bi bi-heart"></i>
                </a>
            @endauth
        </div>
    </div>

    <!-- Recipe Details -->
    <div class="card-body d-flex flex-column p-4">
        <h5 class="card-title text-dark fw-bold mb-2">
            <a class="text-decoration-none text-dark" href="{{ route('recipes.show', $recipe->id) }}">
                {{ $recipe->name }}
            </a>
        </h5>
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
        transition: background-color 0.3s ease, border-color 0.3s ease, transform 0.3s ease;
        border-radius: 50px; /* Rounded button */
        padding: 0.5rem 1rem;
    }

    .btn-brown:hover {
        background-color: #A0522D;
        border-color: #A0522D;
        transform: scale(1.05); /* Slight scale on hover */
    }

    .card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        border-radius: 1rem;
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2); /* Softer shadow */
    }

    .card:hover {
        transform: translateY(-8px); /* Hover lift effect */
        box-shadow: 0 12px 24px rgba(0, 0, 0, 0.3); /* Enhanced shadow on hover */
    }

    .img-fluid {
        transition: transform 0.3s ease, filter 0.3s ease;
        border-radius: 1rem;
    }

    .img-fluid:hover {
        transform: scale(1.1); /* Slightly enlarge image on hover */
        filter: brightness(85%); /* Darken image on hover */
    }

    .card-body {
        position: relative;
        padding: 1.25rem;
        display: flex;
        flex-direction: column;
        background: #fff; /* White background for content area */
    }

    .card-title a {
        text-decoration: none;
        color: #343a40;
        transition: color 0.3s ease;
        font-size: 1.25rem; /* Larger title font size */
    }

    .card-title a:hover {
        color: #8B4513; /* Change color on hover */
    }

    .btn-danger {
        background-color: #dc3545;
        border-color: #dc3545;
        color: white;
    }

    .btn-outline-danger {
        border: 2px solid #dc3545;
        color: #dc3545;
    }

    .btn-outline-danger.btn-danger {
        background-color: #dc3545;
        border-color: #dc3545;
        color: white;
    }

    .btn-outline-danger:hover {
        background-color: #dc3545;
        border-color: #dc3545;
        color: white;
    }
</style>
