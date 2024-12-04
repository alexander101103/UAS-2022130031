@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Medicine Details</h2>

    <div class="form-group">
        <label><strong>Medicine Name:</strong></label>
        <p>{{ $medicine->name }}</p>
    </div>

    <div class="form-group">
        <label><strong>Description:</strong></label>
        <p>{{ $medicine->description }}</p>
    </div>

    <div class="form-group">
        <label><strong>Price:</strong></label>
        <p>{{ $medicine->price }}</p>
    </div>

    <a href="{{ route('medicines.index') }}" class="btn btn-secondary">Back to List</a>
</div>
@endsection
