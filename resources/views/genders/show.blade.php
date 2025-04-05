@extends('layouts.app')

@section('content')
    <h1>Gender Details</h1>

    <h2>{{ $gender->name }}</h2>
    
    <nav>
        <a href="{{ route('genders.index') }}" class="btn btn-primary mt-3">Back to Index</a> 
        <a href="{{ route('genders.edit', $gender->id) }}" class="btn btn-warning mt-3">Edit Gender</a>
    </nav>
@endsection

