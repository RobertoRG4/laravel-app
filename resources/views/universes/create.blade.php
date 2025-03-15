<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Create Universe</h1>
    <form action="{{route('universes.store')}}" method="post">
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name" id="name">
        <button type="submit">Create</button>
    </form>
</body>
</html>