@extends('layouts.head')

@section('main-content')
<div class="container-lg">
    <h3 class="mt-5">Edit Restaurant</h3>
    <form action="{{ route('restaurants.update', $restaurant) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $restaurant->name }}" required>
        </div>
        <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <input type="text" class="form-control" id="address" name="address" value="{{ $restaurant->address }}" required>
        </div>
        <div class="mb-3">
            <label for="rating" class="form-label">Rating</label>
            <input type="number" step="0.1" class="form-control" id="rating" name="rating" value="{{ $restaurant->rating }}" min="0" max="5" required>
        </div>
        <div class="mb-3">
            <label for="phone_number" class="form-label">Phone Number</label>
            <input type="text" class="form-control" id="phone_number" name="phone_number" value="{{ $restaurant->phone_number }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('restaurants.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection