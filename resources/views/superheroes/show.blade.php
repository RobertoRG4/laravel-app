@extends('layouts.app')

@section('title', 'Superhero Details')

@section('breadcrumb', 'Superhero Details')

@section('content')
    <h1>{{ $superhero->name }}</h1>

    <p><strong>Real Name:</strong> {{ $superhero->real_name }}</p>
    <p><strong>Publisher:</strong> {{ $superhero->publisher }}</p>
    <p><strong>Gender:</strong> {{ $superhero->gender->name }}</p>
    <p><strong>Universe:</strong> {{ $superhero->universe->name }}</p>
    
    @if($superhero->picture)
        <img src="{{ asset('storage/'.$superhero->picture) }}" alt="{{ $superhero->name }}" width="200">
    @else
        <p>No picture available</p>
    @endif

    <div>
    <a href="{{ route('superheroes.index') }}" class="btn btn-primary mt-3">Back to Index</a>
    <a href="{{ route('superheroes.edit', $superhero->id) }}" class="btn btn-warning mt-3">Edit Superhero</a>
    </div>



@endsection



