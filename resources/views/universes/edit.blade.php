@extends('layouts.app')

@section('content')
    <h1>Edit Universe</h1>

    <form action="{{ route('universes.update', $universe->id) }}" method="post">
        @csrf
        @method('PUT')

        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="{{ $universe->name }}">
        <button type="submit">Update</button>
    </form>

    <a href="{{ route('universes.index') }}">Back to Index</a>
@endsection


