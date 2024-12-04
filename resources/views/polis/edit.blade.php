@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Poli</h2>

    <form action="{{ route('polis.update', $poli->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Poli Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $poli->name }}" required>
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description">{{ $poli->description }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Update Poli</button>
    </form>
</div>
@endsection
