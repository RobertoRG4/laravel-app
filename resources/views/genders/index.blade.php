@extends('layouts.app')

@section('content')
    <h1>Genders</h1>
    <nav>
        <a href="{{ route('genders.create') }}" class="btn btn-success mb-3">Create New Gender</a>
    </nav>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($genders as $gender)
                <tr>
                    <td>{{ $gender->id }}</td>
                    <td>{{ $gender->name }}</td>
                    <td>
                        <a href="{{ route('genders.show', $gender->id) }}" class="btn btn-info btn-sm">View</a> 
                        <a href="{{ route('genders.edit', $gender->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('genders.destroy', $gender->id) }}" method="post" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Are you sure you want to delete this gender?')" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
