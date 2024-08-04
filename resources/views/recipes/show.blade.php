@extends('layouts.app')
@section('title') {{ $recipe->name }} @endsection
@section('content')
    <div class="container my-5">
        <div class="row gy-4">
            <!-- Recipe Image -->
            <div class="col-md-5">
                <div class="position-relative shadow-lg rounded-4 overflow-hidden h-100">
                    <img src="{{ asset('img/' . $recipe->images->first()->image) }}" alt="{{ $recipe->name }}" class="img-fluid w-100 h-100 object-fit-cover">
                </div>
            </div>

            <!-- Recipe Details -->
            <div class="col-md-7">
                <div class="ps-md-4">
                    <h2 class="fw-bold text-brown">{{ $recipe->name }}</h2>
                    <p class="text-muted fs-5">{{ $recipe->description }}</p>

                    <h4 class="mt-4 text-brown">Ingredients</h4>
                    <ul class="list-unstyled ps-3">
                        @foreach($recipe->ingredients as $ingredient)
                            <li class="mb-2">
                                <i class="bi bi-dot"></i>
                                <span class="fw-bold">{{ $ingredient->name }}</span> - <span class="text-muted">{{ $ingredient->quantity }}</span>
                            </li>
                        @endforeach
                    </ul>

                    <h4 class="mt-4 text-brown">Steps</h4>
                    <ol class="ps-3">
                        @foreach($recipe->steps as $step)
                            <li class="mb-3">{{ $step->description }}</li>
                        @endforeach
                    </ol>
                </div>
            </div>
        </div>
    </div>
@endsection

<!-- Custom Styles -->
<style>
    .text-brown {
        color: #8B4513;
    }

    .shadow-lg {
        box-shadow: 0 12px 24px rgba(0, 0, 0, 0.2); /* Daha belirgin gölge */
    }

    h2 {
        font-size: 2.5rem;
        line-height: 1.2;
        margin-bottom: 0.5rem; /* Başlık ve paragraf arasında boşluk */
    }

    p.fs-5 {
        font-size: 1.125rem;
        line-height: 1.5;
        margin-bottom: 1.5rem; /* Paragraflar arasında boşluk */
    }

    h4 {
        font-size: 1.5rem;
        margin-bottom: 1rem; /* Alt başlıklar için boşluk */
    }

    ul.list-unstyled {
        padding-left: 0;
        list-style: none;
        margin-bottom: 1.5rem; /* Listeler arasında boşluk */
    }

    ul.list-unstyled li {
        display: flex;
        align-items: center;
        font-size: 1.125rem;
    }

    ul.list-unstyled li i {
        font-size: 1.25rem;
        color: #8B4513;
        margin-right: 0.5rem;
    }

    ol {
        padding-left: 1.25rem;
        font-size: 1.125rem;
        margin-bottom: 1.5rem; /* Adımlar arasında boşluk */
    }

    .object-fit-cover {
        object-fit: cover; /* Resim boyutlandırması */
    }
</style>
