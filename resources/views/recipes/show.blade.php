@extends('layouts.app')
@section('title') {{ $recipe->name }} @endsection
@section('content')
    <div class="container my-5">
        <div class="row gy-4">
            <!-- Recipe Image -->
            <div class="col-md-5">
                <div class="position-relative shadow-sm rounded-3 overflow-hidden h-100">
                    <img src="{{ asset('img/' . $recipe->images->first()->image) }}" alt="{{ $recipe->name }}" class="img-fluid w-100 h-100">
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
                            <li class="mb-2"><i class="bi bi-dot"></i> {{ $ingredient->name }} - <strong>{{ $ingredient->quantity }}</strong></li>
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

    .shadow-sm {
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    h2 {
        font-size: 2.5rem;
        line-height: 1.2;
    }

    ul.list-unstyled {
        padding-left: 0;
        list-style: none;
    }

    ul.list-unstyled li i {
        font-size: 1.25rem;
        color: #8B4513;
        margin-right: 0.5rem;
    }

    ol {
        list-style-position: inside;
    }
</style>
