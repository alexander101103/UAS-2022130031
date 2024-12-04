@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Create New Doctor</h2>

    <form action="{{ route('doctors.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="full_name">Full Name</label>
            <input type="text" class="form-control" id="full_name" name="full_name" required>
        </div>

        <div class="form-group">
            <label for="specialization">Specialization</label>
            <input type="text" class="form-control" id="specialization" name="specialization" required>
        </div>

        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" class="form-control" id="phone" name="phone">
        </div>

        <button type="submit" class="btn btn-primary">Create Doctor</button>
    </form>
</div>
@endsection