@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Prescriptions List</h2>

    <a href="{{ route('prescriptions.create') }}" class="btn btn-success mb-3">Add New Prescription</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Medical Record</th>
                <th>Medicine</th>
                <th>Quantity</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($prescriptions as $prescription)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $prescription->medicalRecord->visit_date }} - {{ $prescription->medicalRecord->diagnosis }}</td>
                    <td>{{ $prescription->medicine->name }} - ${{ $prescription->medicine->price }}</td>
                    <td>{{ $prescription->quantity }}</td>
                    <td>
                        <a href="{{ route('prescriptions.show', $prescription->id) }}" class="btn btn-info btn-sm">View</a>
                        <a href="{{ route('prescriptions.edit', $prescription->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('prescriptions.destroy', $prescription->id) }}" method="POST" style="display:inline;">
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
