@extends('layouts.app')

@section('content')
    <h1>Universes</h1>

    <nav>
        <a href="{{ route('universes.create') }}" class="btn btn-success mb-3">Create New Universe</a>
    </nav>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($universes as $universe)
                <tr>
                    <td>{{ $universe->id }}</td>
                    <td>{{ $universe->name }}</td>
                    <td>
                        <a href="{{ route('universes.show', $universe->id) }}" class="btn btn-info btn-sm">View</a> 
                        <a href="{{ route('universes.edit', $universe->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('universes.destroy', $universe->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this universe?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection




