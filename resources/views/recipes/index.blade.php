@extends('layouts.app')

@section('title') {{ $category->name }} Recipes @endsection

@section('content')
    <div class="py-4">
        <div class="h3 mb-3">{{ $category->name }} Recipes</div>
        <div class="row row-cols-2 row-cols-sm-3 row-cols-lg-4 g-2 g-sm-3">
            @foreach($recipes as $recipe)
                <div class="col">
                    @include('app.recipe')
                </div>
            @endforeach
        </div>
    </div>
@endsection
