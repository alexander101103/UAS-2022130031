@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Polis List</h2>

    <a href="{{ route('polis.create') }}" class="btn btn-success mb-3">Add New Poli</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Poli Name</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($polis as $poli)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $poli->name }}</td>
                    <td>{{ $poli->description }}</td>
                    <td>
                        <a href="{{ route('polis.show', $poli->id) }}" class="btn btn-info btn-sm">View</a>
                        <a href="{{ route('polis.edit', $poli->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('polis.destroy', $poli->id) }}" method="POST" style="display:inline;">
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
