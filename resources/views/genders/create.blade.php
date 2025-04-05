<!-- resources/views/genders/create.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Create Gender</h1>

    <form action="{{ route('genders.store') }}" method="post">
        @csrf
        <label for="name" class="form-label">Name</label>
        <input type="text" name="name" id="name" required class="form-control">
        <button type="submit" class="btn btn-primary mt-4">Create Gender</button>
    </form>
@endsection


