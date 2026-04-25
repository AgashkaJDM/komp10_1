    @extends('layouts.head')

    @section('main-content')
<div class="container-lg py-5">
    <div class="d-flex justify-content-between align-items-center mt-5 mb-4">
        <h1 class="fw-bold">All Foods</h1>
        <a href="{{ route('foods.create') }}" class="btn btn-primary">Add New Dish</a>
    </div>
    @if(session('success'))
        <div class="alert alert-success mt-3">{{ session('success') }}</div>
    @endif
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
        @foreach ($foods as $food)
            <div class="col">
                <div class="card h-100">
                    <img src="{{ asset('img/image2.jpg') }}" class="card-img-top" alt="{{ $food->name }}">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title fw-bold">{{ $food->name }}</h5>
                        <p class="card-text text-muted">{{ $food->restaurant->name }} - {{ $food->category->name }}</p>
                        <p class="card-text fw-bold text-success fs-5">${{ $food->price }}</p>
                        <div class="mt-auto">
                            <a href="{{ route('foods.show', $food) }}" class="btn btn-outline-primary btn-sm me-2">View Details</a>
                            <a href="{{ route('foods.edit', $food) }}" class="btn btn-outline-warning btn-sm me-2">Edit</a>
                            <form action="{{ route('foods.destroy', $food) }}" method="POST" style="display:inline;">
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
        {{ $foods->links('pagination::bootstrap-5') }}
    </div>
</div>
@endsection