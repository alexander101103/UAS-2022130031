@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Patient Details</h2>

    <div class="form-group">
        <label><strong>Full Name:</strong></label>
        <p>{{ $patient->full_name }}</p>
    </div>

    <div class="form-group">
        <label><strong>Gender:</strong></label>
        <p>{{ ucfirst($patient->gender) }}</p>
    </div>

    <div class="form-group">
        <label><strong>Date of Birth:</strong></label>
        <p>{{ \Carbon\Carbon::parse($patient->dob)->format('d M Y') }}</p>
    </div>

    <div class="form-group">
        <label><strong>Phone:</strong></label>
        <p>{{ $patient->phone }}</p>
    </div>

    <div class="form-group">
        <label><strong>Address:</strong></label>
        <p>{{ $patient->address }}</p>
    </div>

    <a href="{{ route('patients.index') }}" class="btn btn-secondary">Back to List</a>
</div>
@endsection