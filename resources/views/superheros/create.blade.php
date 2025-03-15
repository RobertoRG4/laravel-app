<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Create Superhero</h1>
    <form action="{{ route('superheros.store') }}" method="post">
        @csrf
        <label for="gender_id">Gender</label>
        <select name="gender_id" id="gender_id">
            @foreach ($genders as $gender)
                <option value="{{ $gender->id }}">{{ $gender->name }}</option>
            @endforeach
        </select>
        <br>
        <label for="name">Name</label>
        <input type="text" name="name" id="name">
        <br>
        <input type="submit" value="Create">
    </form>
</body>
</html>