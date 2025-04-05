<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Application')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand">App</a>
            <div class="navbar-nav">
                <a class="nav-item nav-link" href="{{ route('superheroes.index') }}">Superheroes</a>
                <a class="nav-item nav-link" href="{{ route('universes.index') }}">Universes</a>
                <a class="nav-item nav-link" href="{{ route('genders.index') }}">Gender</a>
            </div>
        </nav>

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                @yield('breadcrumb')
            </ol>
        </nav>

        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


