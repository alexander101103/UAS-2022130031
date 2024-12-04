@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Create New Prescription</h2>

    <form action="{{ route('prescriptions.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="medical_record_id">Medical Record</label>
            <select class="form-control" id="medical_record_id" name="medical_record_id" required>
                @foreach($medicalRecords as $record)
                    <option value="{{ $record->id }}">{{ $record->visit_date }} - {{ $record->diagnosis }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="medicine_id">Medicine</label>
            <select class="form-control" id="medicine_id" name="medicine_id" required>
                @foreach($medicines as $medicine)
                    <option value="{{ $medicine->id }}">{{ $medicine->name }} - ${{ $medicine->price }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="quantity">Quantity</label>
            <input type="number" class="form-control" id="quantity" name="quantity" required>
        </div>

        <button type="submit" class="btn btn-primary">Create Prescription</button>
    </form>
</div>
@endsection
