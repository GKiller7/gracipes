@extends('layouts.app')
@section('title') {{ $recipe->name }} @endsection
@section('content')
    <div class="container my-5">
        <div class="row">
            <!-- Recipe Image -->
            <div class="col-md-5">
                <img src="{{ asset('img/' . $recipe->images->first()->image) }}" alt="{{ $recipe->name }}" class="img-fluid rounded-3 w-100 h-75">
            </div>

            <!-- Recipe Details -->
            <div class="col-md-7">
                <h2>{{ $recipe->name }}</h2>
                <p class="text-muted">{{ $recipe->description }}</p>

                <h4>Ingredients</h4>
                <ul>
                    @foreach($recipe->ingredients as $ingredient)
                        <li>{{ $ingredient->name }} - {{ $ingredient->quantity }}</li>
                    @endforeach
                </ul>

                <h4>Steps</h4>
                <ol>
                    @foreach($recipe->steps as $step)
                        <li>{{ $step->description }}</li>
                    @endforeach
                </ol>
            </div>
        </div>
    </div>
@endsection
