@extends('layouts.app')

@section('content')
    <h1>Edit Gender</h1>

    <form action="{{ route('genders.update', $gender->id) }}" method="post">
        @csrf
        @method('PUT') 
        <label for="name" class="form-label">Name</label>
        <input type="text" name="name" id="name" value="{{ $gender->name }}" class="form-control">
        <button type="submit" class="btn btn-primary mt-2">Update Gender</button>
    </form>
@endsection

