@extends('layouts.head')

@section('main-content')
<div class="container-lg">
    <h3 class="mt-5">Edit Food</h3>
    <form action="{{ route('foods.update', $food) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $food->name }}" required>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" class="form-control" id="price" name="price" value="{{ $food->price }}" min="0" required>
        </div>
        <div class="mb-3">
            <label for="code" class="form-label">Code</label>
            <input type="number" class="form-control" id="code" name="code" value="{{ $food->code }}" required>
        </div>
        <div class="mb-3">
            <label for="category_id" class="form-label">Category</label>
            <select class="form-control" id="category_id" name="category_id" required>
                <option value="">Select Category</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ $food->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="restaurant_id" class="form-label">Restaurant</label>
            <select class="form-control" id="restaurant_id" name="restaurant_id" required>
                <option value="">Select Restaurant</option>
                @foreach($restaurants as $restaurant)
                    <option value="{{ $restaurant->id }}" {{ $food->restaurant_id == $restaurant->id ? 'selected' : '' }}>{{ $restaurant->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('foods.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection