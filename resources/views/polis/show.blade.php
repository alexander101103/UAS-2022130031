@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Poli Details</h2>

    <div class="form-group">
        <label><strong>Poli Name:</strong></label>
        <p>{{ $poli->name }}</p>
    </div>

    <div class="form-group">
        <label><strong>Description:</strong></label>
        <p>{{ $poli->description }}</p>
    </div>

    <a href="{{ route('polis.index') }}" class="btn btn-secondary">Back to List</a>
</div>
@endsection
