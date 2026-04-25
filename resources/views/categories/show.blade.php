@extends('layouts.head')

@section('main-content')
<div class="container-lg py-5">
    <div class="text-center mb-5">
        <i class="bi bi-tags text-primary" style="font-size: 3rem;"></i>
        <h1 class="fw-bold">{{ $category->name }}</h1>
        <p class="lead">Delicious foods in this category</p>
    </div>
    @if($foods->isEmpty())
        <p class="text-center">No foods available in this category yet.</p>
    @else
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            @foreach ($foods as $food)
                <div class="col">
                    <div class="card h-100">
                        <img src="{{ asset('img/image2.jpg') }}" class="card-img-top" alt="{{ $food->name }}">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title fw-bold">{{ $food->name }}</h5>
                            <p class="card-text text-muted">{{ $food->restaurant->name }}</p>
                            <p class="card-text fw-bold text-success fs-5">${{ $food->price }}</p>
                            <div class="mt-auto">
                                <a href="{{ route('foods.show', $food) }}" class="btn btn-outline-primary btn-sm">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
    <div class="d-flex justify-content-center mt-4">
        {{ $foods->links('pagination::bootstrap-5') }}
    </div>
    <div class="text-center mt-4">
        <a href="{{ route('categories.index') }}" class="btn btn-secondary">Back to Categories</a>
        <a href="{{ route('categories.edit', $category) }}" class="btn btn-warning ms-2">Edit Category</a>
    </div>
</div>
@endsection