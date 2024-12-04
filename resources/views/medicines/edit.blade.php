@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Medicine</h2>

    <form action="{{ route('medicines.update', $medicine->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Medicine Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $medicine->name }}" required>
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description">{{ $medicine->description }}</textarea>
        </div>

        <div class="form-group">
            <label for="price">Price</label>
            <input type="number" class="form-control" id="price" name="price" value="{{ $medicine->price }}" step="0.01" required>
        </div>

        <button type="submit" class="btn btn-primary">Update Medicine</button>
    </form>
</div>
@endsection
