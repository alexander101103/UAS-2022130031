@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Medical Record Details</h2>

    <div class="form-group">
        <label><strong>Patient:</strong></label>
        <p>{{ $medicalRecord->patient ? $medicalRecord->patient->full_name : 'Unknown Patient' }}</p>
    </div>

    <div class="form-group">
        <label><strong>Doctor:</strong></label>
        <p>{{ $medicalRecord->doctor ? $medicalRecord->doctor->full_name : 'Unknown Doctor' }}</p>
    </div>

    <div class="form-group">
        <label><strong>Poli:</strong></label>
        <p>{{ $medicalRecord->polie ? $medicalRecord->polie->name : 'Unknown Poli' }}</p>
    </div>

    <div class="form-group">
        <label><strong>Visit Date:</strong></label>
        <p>{{ $medicalRecord->visit_date }}</p>
    </div>

    <div class="form-group">
        <label><strong>Diagnosis:</strong></label>
        <p>{{ $medicalRecord->diagnosis }}</p>
    </div>

    <div class="form-group">
        <label><strong>Action Plan:</strong></label>
        <p>{{ $medicalRecord->action_plan }}</p>
    </div>

    <a href="{{ route('medical_records.index') }}" class="btn btn-secondary">Back to List</a>
</div>
@endsection