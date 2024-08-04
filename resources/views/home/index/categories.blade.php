<div class="py-4">
    <div class="h3 mb-4 text-center text-brown">Categories</div>
    <div class="row g-3">
        @foreach($categories as $category)
            <div class="col-6 col-md-4 col-lg-3">
                <div class="card h-100 border-0 shadow-lg rounded-4 position-relative overflow-hidden">
                    <div class="card-body d-flex flex-column justify-content-center text-center p-4">
                        <div class="mb-3">
                            <!-- Category Icon or Image Placeholder -->
                            <i class="bi bi-basket-fill text-brown" style="font-size: 2.5rem;"></i>
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
    .text-brown {
        color: #8B4513; /* Brown color for text */
    }

    .card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        overflow: hidden; /* Ensure no content overflows the card */
    }

    .card:hover {
        transform: translateY(-10px); /* Slightly more elevated on hover */
        box-shadow: 0 16px 32px rgba(0, 0, 0, 0.2); /* More pronounced shadow */
    }

    .card-body {
        transition: background-color 0.3s ease;
        background-color: #f8f9fa; /* Light background for better contrast */
    }

    .card:hover .card-body {
        background-color: #e9ecef; /* Slightly darker background on hover */
    }

    .card-title a {
        color: #343a40; /* Dark color for text */
        transition: color 0.3s ease, transform 0.3s ease;
    }

    .card-title a:hover {
        color: #A0522D; /* Slightly lighter brown on hover */
        transform: scale(1.05); /* Slightly enlarge text on hover */
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
