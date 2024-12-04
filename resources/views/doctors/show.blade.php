@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Doctor Details</h2>

    <div class="form-group">
        <label><strong>Full Name:</strong></label>
        <p>{{ $doctor->full_name }}</p>
    </div>

    <div class="form-group">
        <label><strong>Specialization:</strong></label>
        <p>{{ $doctor->specialization }}</p>
    </div>

    <div class="form-group">
        <label><strong>Phone:</strong></label>
        <p>{{ $doctor->phone }}</p>
    </div>

    <a href="{{ route('doctors.index') }}" class="btn btn-secondary">Back to List</a>
</div>
@endsection