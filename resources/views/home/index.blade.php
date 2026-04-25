    @extends('layouts.head')

@section('main-content')
<div class="hero-section">
    <div class="container text-center text-white">
        <h1 class="display-4 fw-bold">{{ $appName }}</h1>
        <h2 class="h2 mb-4">Welcome to Our Restaurant</h2>
        <p class="lead mb-4">Explore our delicious menu and find your favorite foods.</p>
        <a href="#restaurants" class="btn btn-light btn-lg px-4 py-2">Explore Restaurants</a>
    </div>
</div>
<div id="restaurants" class="container-lg py-5">
    <h2 class="text-center mb-4 fw-bold">Featured Restaurants</h2>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
        @foreach ($restaurants as $restaurant)
            <div class="col">
                <div class="card h-100 restaurant-card">
                    <div class="card-body text-center">
                        <i class="bi bi-shop text-primary icon-large"></i>
                        <h5 class="card-title fw-bold">{{ $restaurant->name }}</h5>
                        <p class="card-text">{{ $restaurant->address }}</p>
                        <p class="card-text"><strong>Rating:</strong> <span class="star-rating">{{ str_repeat('★', $restaurant->rating) }}{{ str_repeat('☆', 5 - $restaurant->rating) }}</span> ({{ $restaurant->rating }}/5)</p>
                        <p class="card-text"><strong>Foods:</strong> {{ $restaurant->foods_count }}</p>
                        <a href="{{ route('restaurants.show', $restaurant) }}" class="btn btn-primary">View Menu</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection