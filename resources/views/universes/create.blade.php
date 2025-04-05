@extends('layouts.app')

@section('title', 'Create Universe')

@section('breadcrumb')
    <li class="breadcrumb-item active" aria-current="page">Create Universe</li>
@endsection

@section('content')
    <h1>Create Universe</h1>

    <form action="{{ route('universes.store') }}" method="post">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Universe Name</label>
            <input type="text" class="form-control" name="name" id="name" required>
        </div>

        <button type="submit" class="btn btn-primary">Create Universe</button>
    </form>
@endsection

