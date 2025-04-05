@extends('layouts.app')

@section('content')
    <h1>Superheroes</h1>

    <nav>
        <a href="{{ route('superheroes.create') }}" class="btn btn-success mb-3">Create New Superhero</a>
    </nav>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Real Name</th>
                <th>Publisher</th>
                <th>Gender</th>
                <th>Universe</th>
                <th>Picture</th> 
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($superheros as $superhero)
                <tr>
                    <td>{{ $superhero->id }}</td>
                    <td>{{ $superhero->name }}</td>
                    <td>{{ $superhero->real_name }}</td>
                    <td>{{ $superhero->publisher }}</td>
                    <td>{{ $superhero->gender->name }}</td>
                    <td>{{ $superhero->universe->name }}</td>
                    <td>
                        @if($superhero->picture)
                            <img src="{{ asset('storage/'.$superhero->picture) }}" alt="{{ $superhero->name }}" width="50"> <!-- Mostrar la imagen -->
                        @else
                            <p>No Image</p>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('superheroes.show', $superhero->id) }}" class="btn btn-info btn-sm">View</a>
                        <a href="{{ route('superheroes.edit', $superhero->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('superheroes.destroy', $superhero->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this superhero?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection




