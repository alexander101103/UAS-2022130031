@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Create New Medical Record</h2>

    <form action="{{ route('medical_records.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="patient_id">Patient</label>
            <<select class="form-control" id="patient_id" name="patient_id" required>
                @foreach($patients as $patient)
                <option value="{{ $patient->id }}">{{ $patient->full_name }}</option>
                @endforeach
                </select>
        </div>

        <div class="form-group">
            <label for="doctor_id">Doctor</label>
            <select class="form-control" id="doctor_id" name="doctor_id" required>
                @foreach($doctors as $doctor)
                <option value="{{ $doctor->id }}">{{ $doctor->full_name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="polis_id">Poli</label>
            <select class="form-control" id="polis_id" name="polis_id" required>
                @foreach($polis as $poli)
                <option value="{{ $poli->id }}">{{ $poli->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="visit_date">Visit Date</label>
            <input type="date" class="form-control" id="visit_date" name="visit_date" required>
        </div>

        <div class="form-group">
            <label for="diagnosis">Diagnosis</label>
            <textarea class="form-control" id="diagnosis" name="diagnosis" required></textarea>
        </div>

        <div class="form-group">
            <label for="action_plan">Action Plan</label>
            <textarea class="form-control" id="action_plan" name="action_plan" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Create Medical Record</button>
    </form>
</div>
@endsection