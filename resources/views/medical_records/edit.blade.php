@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Medical Record</h2>

    <form action="{{ route('medical_records.update', $medicalRecord->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="patient_id">Patient</label>
            <select class="form-control" id="patient_id" name="patient_id" required>
                @foreach($patients as $patient)
                <option value="{{ $patient->id }}" {{ $medicalRecord->patient_id == $patient->id ? 'selected' : '' }}>{{ $patient->full_name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="doctor_id">Doctor</label>
            <select class="form-control" id="doctor_id" name="doctor_id" 
                required>
                @foreach($doctors as $doctor)
                <option value="{{ $doctor->id }}" {{ $medicalRecord->doctor_id == $doctor->id ? 'selected' : '' }}>{{ $doctor->full_name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="polis_id">Poli</label>
            <select class="form-control" id="polis_id" name="polis_id" required>
                @foreach($polis as $poli)
                <option value="{{ $poli->id }}" {{ $medicalRecord->polis_id == $poli->id ? 'selected' : '' }}>{{ $poli->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="visit_date">Visit Date</label>
            <input type="date" class="form-control" id="visit_date" name="visit_date" value="{{ $medicalRecord->visit_date }}" required>
        </div>

        <div class="form-group">
            <label for="diagnosis">Diagnosis</label>
            <textarea class="form-control" id="diagnosis" name="diagnosis" required>{{ $medicalRecord->diagnosis }}</textarea>
        </div>

        <div class="form-group">
            <label for="action_plan">Action Plan</label>
            <textarea class="form-control" id="action_plan" name="action_plan" required>{{ $medicalRecord->action_plan }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Update Medical Record</button>
    </form>
</div>
@endsection
