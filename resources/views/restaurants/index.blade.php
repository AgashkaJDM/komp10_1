    @extends('layouts.head')

    @section('main-content')
    <div class="container-lg py-5">
        <div class="d-flex justify-content-between align-items-center mt-5 mb-4">
            <h1 class="fw-bold">Our Restaurants</h1>
            <a href="{{ route('restaurants.create') }}" class="btn btn-primary">Add Restaurant</a>
        </div>
        @if(session('success'))
            <div class="alert alert-success mt-3">{{ session('success') }}</div>
        @endif
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            @foreach ($restaurants as $restaurant)
                <div class="col">
                    <div class="card h-100 restaurant-card">
                        <div class="card-body text-center">
                            <i class="bi bi-shop text-primary icon-large"></i>
                            <h5 class="card-title fw-bold">{{ $restaurant->name }}</h5>
                            <p class="card-text">{{ $restaurant->address }}</p>
                            <p class="card-text"><strong>Rating:</strong> <span class="star-rating">{{ str_repeat('★', $restaurant->rating) }}{{ str_repeat('☆', 5 - $restaurant->rating) }}</span> ({{ $restaurant->rating }}/5)</p>
                            <p class="card-text"><strong>Phone:</strong> {{ $restaurant->phone_number }}</p>
                            <p class="card-text"><strong>Foods:</strong> {{ $restaurant->foods_count }}</p>
                            <div class="mt-3">
                                <a href="{{ route('restaurants.show', $restaurant) }}" class="btn btn-outline-info btn-sm me-2">View</a>
                                <a href="{{ route('restaurants.edit', $restaurant) }}" class="btn btn-outline-warning btn-sm me-2">Edit</a>
                                <form action="{{ route('restaurants.destroy', $restaurant) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    <div class="d-flex justify-content-center mt-4">
        {{ $restaurants->links('pagination::bootstrap-5') }}
    </div>
