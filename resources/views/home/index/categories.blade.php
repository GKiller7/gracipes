<div class="py-4">
    <div class="h3 mb-3">Categories</div>
    <div class="row">
        @foreach($categories as $category)
            <div class="col">
                <a class="btn btn-danger d-block text-center my-1" href="{{ route('recipes.index', ['categoryId' => $category->id]) }}">
                    {{ $category->name }}
                </a>
            </div>
        @endforeach
    </div>
</div>
