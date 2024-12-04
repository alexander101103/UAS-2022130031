@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Prescription Details</h2>

    <div class="form-group">
        <label><strong>Medical Record:</strong></label>
        <p>{{ $prescription->medicalRecord->visit_date }} - {{ $prescription->medicalRecord->diagnosis }}</p>
    </div>

    <div class="form-group">
        <label><strong>Medicine:</strong></label>
        <p>{{ $prescription->medicine->name }} - ${{ $prescription->medicine->price }}</p>
    </div>

    <div class="form-group">
        <label><strong>Quantity:</strong></label>
        <p>{{ $prescription->quantity }}</p>
    </div>

    <a href="{{ route('prescriptions.index') }}" class="btn btn-secondary">Back to List</a>
</div>
@endsection
