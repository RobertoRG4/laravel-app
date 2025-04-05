<!-- resources/views/superheroes/edit.blade.php -->
@extends('layouts.app')

@section('title', 'Edit Superhero')

@section('breadcrumb', 'Edit Superhero')

@section('content')
    <h1>Edit Superhero</h1>

    <form action="{{ route('superheroes.update', $superhero->id) }}" method="post">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="gender_id" class="form-label">Gender</label>
            <select name="gender_id" id="gender_id" class="form-select">
                @foreach ($genders as $gender)
                    <option value="{{ $gender->id }}" {{ $gender->id == $superhero->gender_id ? 'selected' : '' }}>{{ $gender->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $superhero->name }}">
        </div>

        <div class="mb-3">
            <label for="publisher" class="form-label">Publisher</label>
            <input type="text" name="publisher" id="publisher" class="form-control" value="{{ $superhero->publisher }}">
        </div>

        <div class="mb-3">
            <label for="universe_id" class="form-label">Universe</label>
            <select name="universe_id" id="universe_id" class="form-select">
                @foreach ($universes as $universe)
                    <option value="{{ $universe->id }}" {{ $universe->id == $superhero->universo_id ? 'selected' : '' }}>{{ $universe->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="real_name" class="form-label">Real Name</label>
            <input type="text" name="real_name" id="real_name" class="form-control" value="{{ $superhero->real_name }}">
        </div>

        <div class="mb-3">
            <label for="picture" class="form-label">Picture URL</label>
            <input type="text" name="picture" id="picture" class="form-control" value="{{ $superhero->picture }}">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
