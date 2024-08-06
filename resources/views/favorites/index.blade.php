@extends('layouts.app')
@section('title') Favorites @endsection
@section('content')
    <div class="py-4">
        <div class="h3 mb-3">
            Favorites
        </div>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 mb-4">
            @forelse($recipes as $recipe)
                <div class="col">
                    @include('app.favorite_recipe')
                </div>
            @empty
                <div class="col">
                    <div class="bg-white rounded-4 border p-3 h-100">
                        Not found
                    </div>
                </div>
            @endforelse
        </div>
        {{ $recipes->links() }}
    </div>
@endsection
