<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | Laravel App</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="/">My Laravel App</a>
            <div>
                <a class="nav-link d-inline text-white" href="{{ url('/home') }}">Home</a>
                <a class="nav-link d-inline text-white" href="{{ url('/about') }}">About</a>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <h1 class="mb-4">@yield('title')</h1>
        @yield('content')
    </div>
</body>
</html>
