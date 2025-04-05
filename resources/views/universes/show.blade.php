@extends('layouts.app')

@section('content')
    <h1>Universe Details</h1>

    <p><strong>ID:</strong> {{ $universe->id }}</p>
    <p><strong>Name:</strong> {{ $universe->name }}</p>

    <nav>
        <a href="{{ route('universes.index') }}" class="btn btn-primary mt-3">Back to Index</a> 
        <a href="{{ route('universes.edit', $universe->id) }}" class="btn btn-warning mt-3">Edit Universe</a>
    </nav>
@endsection



