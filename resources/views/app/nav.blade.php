<nav class="navbar navbar-expand-xl navbar-dark bg-brown shadow-sm" aria-label="Navbar">
    <div class="container-xl">
        <a class="navbar-brand fw-bold" href="{{ route('home.index') }}">Recipes</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav ms-auto mb-2 mb-xl-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('home.index') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Favorites</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Custom Styles -->
<style>
    .bg-brown {
        background-color: #8B4513; /* Brown background */
    }

    .navbar-brand {
        font-size: 1.5rem;
        color: #fff;
    }

    .navbar-brand:hover {
        color: #FFD700; /* Gold color on hover */
    }

    .nav-link {
        font-size: 1rem;
        color: #fff;
        transition: color 0.3s ease;
    }

    .nav-link:hover {
        color: #FFD700; /* Gold color on hover */
    }

    .nav-link.active {
        color: #FFD700; /* Gold color for active link */
        font-weight: bold;
    }

    .navbar-toggler {
        border: none;
    }

    .navbar-toggler-icon {
        background-image: url('data:image/svg+xml;charset=utf8,%3Csvg viewBox="0 0 30 30" xmlns="http://www.w3.org/2000/svg"%3E%3Cpath stroke="rgba%288, 8, 8, 0.5%29" stroke-width="2" linecap="round" linejoin="round" d="M4 7h22M4 15h22M4 23h22"/%3E%3C/svg%3E');
    }
</style>
