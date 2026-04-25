@extends('layouts.head')

@section('main-content')
<div class="container-lg py-5">
    <div class="d-flex justify-content-between align-items-center mt-5 mb-4">
        <h1 class="fw-bold">Food Categories</h1>
        <a href="{{ route('categories.create') }}" class="btn btn-primary">Add Category</a>
    </div>
    @if(session('success'))
        <div class="alert alert-success mt-3">{{ session('success') }}</div>
    @endif
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
        @foreach ($categories as $category)
            <div class="col">
                <div class="card h-100 category-card text-center">
                    <div class="card-body d-flex flex-column justify-content-center">
                        <i class="bi bi-tags text-primary icon-large text-center"></i>
                        <h5 class="card-title fw-bold">{{ $category->name }}</h5>
                        <p class="card-text">Delicious foods: {{ $category->foods_count }}</p>
                        <div class="mt-auto">
                            <a href="{{ route('categories.show', $category) }}" class="btn btn-outline-info btn-sm me-2">View</a>
                            <a href="{{ route('categories.edit', $category) }}" class="btn btn-outline-warning btn-sm me-2">Edit</a>
                            <form action="{{ route('categories.destroy', $category) }}" method="POST" style="display:inline;">
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
        {{ $categories->links('pagination::bootstrap-5') }}
    </div>
</div>
@endsection()