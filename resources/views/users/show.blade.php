@extends('layouts.head')

@section('main-content')
<div class="container-lg">
    <h3 class="mt-5">{{ $user->name }}</h3>
    <p><strong>Email:</strong> {{ $user->email }}</p>
    <p><strong>Created At:</strong> {{ $user->created_at->format('d M Y H:i') }}</p>
    <p><strong>Updated At:</strong> {{ $user->updated_at->format('d M Y H:i') }}</p>
    <a href="{{ route('users.index') }}" class="btn btn-secondary">Back</a>
    <a href="{{ route('users.edit', $user) }}" class="btn btn-warning">Edit</a>
</div>
@endsection