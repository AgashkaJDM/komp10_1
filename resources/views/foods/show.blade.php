    @extends('layouts.head')

    @section('main-content')
<div class="container-lg py-5">
    <div class="card mx-auto shadow-lg" style="max-width: 800px; border-radius: 20px; overflow: hidden;">
        <img src="{{ asset('img/image2.jpg') }}" class="card-img-top" alt="{{ $food->name }}" style="height: 300px; object-fit: cover;">
        <div class="card-body p-4">
            <h1 class="card-title fw-bold text-center mb-4">{{ $food->name }}</h1>
            <div class="row">
                <div class="col-md-6">
                    <p class="card-text fs-5"><strong>Price:</strong> <span class="text-success fw-bold">${{ $food->price }}</span></p>
                    <p class="card-text"><strong>Code:</strong> {{ $food->code }}</p>
                    <p class="card-text"><strong>Category:</strong> {{ $food->category->name }}</p>
                </div>
                <div class="col-md-6">
                    <p class="card-text"><strong>Restaurant:</strong> {{ $food->restaurant->name }}</p>
                    <p class="card-text"><strong>Address:</strong> {{ $food->restaurant->address }}</p>
                    <p class="card-text"><strong>Phone:</strong> {{ $food->restaurant->phone_number }}</p>
                </div>
            </div>
            <hr>
            <div class="d-flex justify-content-between align-items-center">
                <small class="text-muted"><i class="bi bi-calendar"></i> Added on {{ ($food->created_at)->format('d.m.Y') }}</small>
                <div class="text-end">
                    <i class="bi bi-heart text-danger fs-5"></i>
                    <span class="fw-bold">{{ $food->like_count }}</span> likes
                </div>
            </div>
            <div class="mt-4 text-center">
                <a href="{{ route('foods.index') }}" class="btn btn-secondary me-3">Back to Menu</a>
                <a href="{{ route('foods.edit', $food) }}" class="btn btn-warning">Edit Dish</a>
            </div>
        </div>
    </div>
</div>

    @endsection()