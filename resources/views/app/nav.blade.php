<nav class="navbar navbar-expand-lg navbar-dark bg-brown shadow-sm" aria-label="Navbar">
    <div class="container-lg">
        <a class="navbar-brand fw-bold" href="{{ route('home.index') }}">Recipes</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav ms-auto">
                @auth
                    <li class="nav-item">
                        <a class="nav-link link-warning" href="{{ route('favorites.index') }}">
                            <i class="bi-heart-fill"></i> Favorites
                        </a>
                    </li>
                @endauth
                @auth
                    <li class="nav-item">
                        <a class="nav-link link-warning" href="#"
                           onclick="event.preventDefault(); document.getElementById('logout').submit();">
                            <i class="bi-box-arrow-right"></i> Logout
                            {{ auth()->user()->name }}
                        </a>
                        <form method="POST" action="{{ route('logout') }}" id="logout">
                            @csrf
                        </form>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link link-warning" href="{{ route('login') }}">
                            <i class="bi-box-arrow-in-right"></i> Login
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link-warning" href="{{ route('register') }}">
                            <i class="bi-person-plus"></i> Register
                        </a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>

<!-- Custom Styles -->
<style>
    .bg-brown {
        background-color: #8B4513; /* Brown background */
    }

    .navbar {
        padding: 0.5rem 1rem; /* Reduced padding for a slimmer look */
    }

    .navbar-brand {
        font-size: 1.25rem; /* Smaller font size */
        color: #fff;
        font-weight: 600; /* Slightly less bold */
        letter-spacing: 0.5px;
    }

    .navbar-brand:hover {
        color: #FFD700; /* Gold color on hover */
    }

    .nav-link {
        font-size: 0.9rem; /* Slightly smaller font size */
        color: #fff;
        transition: color 0.3s ease, transform 0.3s ease;
    }

    .nav-link:hover {
        color: #FFD700; /* Gold color on hover */
        transform: scale(1.05); /* Slightly enlarge on hover */
    }

    .nav-link.active {
        color: #FFD700; /* Gold color for active link */
        font-weight: 600; /* Slightly less bold */
    }

    .navbar-toggler {
        border: none;
    }

    .navbar-toggler-icon {
        background-image: url('data:image/svg+xml;charset=utf8,%3Csvg viewBox="0 0 30 30" xmlns="http://www.w3.org/2000/svg"%3E%3Cpath stroke="rgba%288, 8, 8, 0.5%29" stroke-width="2" linecap="round" linejoin="round" d="M4 7h22M4 15h22M4 23h22"/%3E%3C/svg%3E');
    }

    /* Enhanced navbar dropdown */
    .navbar-nav .nav-item .dropdown-menu {
        background-color: #8B4513;
        border: none;
    }

    .navbar-nav .nav-item .dropdown-menu .dropdown-item {
        color: #fff;
    }

    .navbar-nav .nav-item .dropdown-menu .dropdown-item:hover {
        background-color: #A0522D;
    }

    /* Enhanced navbar link active state */
    .navbar-nav .nav-item .nav-link.active {
        border-bottom: 2px solid #FFD700; /* Gold underline for active link */
    }
</style>
