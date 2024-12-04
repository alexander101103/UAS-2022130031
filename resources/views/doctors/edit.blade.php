@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Doctor</h2>

    <form action="{{ route('doctors.update', $doctor->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="full_name">Full Name</label>
            <input type="text" class="form-control" id="full_name" name="full_name" value="{{ $doctor->full_name }}" required>
        </div>

        <div class="form-group">
            <label for="specialization">Specialization</label>
            <input type="text" class="form-control" id="specialization" name="specialization" value="{{ $doctor->specialization }}" required>
        </div>

        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" class="form-control" id="phone" name="phone" value="{{ $doctor->phone }}">
        </div>

        <button type="submit" class="btn btn-primary">Update Doctor</button>
    </form>
</div>
@endsection