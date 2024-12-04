@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Medicines List</h2>

    <a href="{{ route('medicines.create') }}" class="btn btn-success mb-3">Add New Medicine</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Medicine Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($medicines as $medicine)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $medicine->name }}</td>
                    <td>{{ $medicine->description }}</td>
                    <td>{{ $medicine->price }}</td>
                    <td>
                        <a href="{{ route('medicines.show', $medicine->id) }}" class="btn btn-info btn-sm">View</a>
                        <a href="{{ route('medicines.edit', $medicine->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('medicines.destroy', $medicine->id) }}" method="POST" style="display:inline;">
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
