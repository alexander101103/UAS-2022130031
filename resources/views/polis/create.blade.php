@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Create New Poli</h2>

    <form action="{{ route('polis.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="name">Poli Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Create Poli</button>
    </form>
</div>
@endsection
