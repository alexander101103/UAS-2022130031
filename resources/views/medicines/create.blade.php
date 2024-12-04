@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Create New Medicine</h2>

    <form action="{{ route('medicines.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="name">Medicine Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description"></textarea>
        </div>

        <div class="form-group">
            <label for="price">Price</label>
            <input type="number" class="form-control" id="price" name="price" step="0.01" required>
        </div>

        <button type="submit" class="btn btn-primary">Create Medicine</button>
    </form>
</div>
@endsection
