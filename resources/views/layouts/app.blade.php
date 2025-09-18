<!DOCTYPE html>
<html>
<head>
    <title>CRUD Buku</title>
    <!-- Tambahkan Bootstrap dari CDN biar tampilan rapi -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-dark bg-dark mb-4">
        <div class="container">
            <a class="navbar-brand" href="{{ route('buku.index') }}">Manajemen Buku</a>
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>
</body>
</html>
