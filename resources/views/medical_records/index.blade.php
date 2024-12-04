@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Medical Records List</h2>

    <a href="{{ route('medical_records.create') }}" class="btn btn-success mb-3">Add New Medical Record</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Patient</th>
                <th>Doctor</th>
                <th>Poli</th>
                <th>Visit Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($medicalRecords as $medicalRecord)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $medicalRecord->patient?->full_name ?? 'Unknown Patient' }}</td>
                <td>{{ $medicalRecord->doctor?->full_name ?? 'Unknown Doctor' }}</td>
                <td>{{ $medicalRecord->poli?->name ?? 'Unknown Poli' }}</td>
                <td>{{ $medicalRecord->visit_date }}</td>
                <td>
                    <a href="{{ route('medical_records.show', $medicalRecord->id) }}" class="btn btn-info btn-sm">View</a>
                    <a href="{{ route('medical_records.edit', $medicalRecord->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('medical_records.destroy', $medicalRecord->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection