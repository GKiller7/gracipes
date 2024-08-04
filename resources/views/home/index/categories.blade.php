<div class="py-4">
    <div class="h3 mb-4 text-center">Categories</div>
    <div class="row g-3">
        @foreach($categories as $category)
            <div class="col-6 col-md-4 col-lg-3">
                <div class="card h-100 border-0 shadow-sm position-relative">
                    <div class="card-body d-flex flex-column justify-content-center text-center">
                        <div class="mb-3">
                            <!-- Category Icon or Image Placeholder -->
                            <i class="bi bi-basket-fill text-brown" style="font-size: 2rem;"></i>
                        </div>
                        <h5 class="card-title mb-0">
                            <a href="{{ route('recipes.index', ['categoryId' => $category->id]) }}" class="stretched-link text-decoration-none text-dark">
                                {{ $category->name }}
                            </a>
                        </h5>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

<!-- Custom Styles -->
<style>
    .card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 12px 24px rgba(0, 0, 0, 0.2);
    }

    .card .card-title a:hover {
        color: #A0522D; /* Slightly lighter brown on hover */
    }

    .stretched-link::after {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        z-index: 1;
    }
</style>
