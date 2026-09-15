<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Principal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">Mi Sistema</a>
            
            <form action="{{ route('logout') }}" method="POST" class="d-flex">
                @csrf
                <button type="submit" class="btn btn-outline-light btn-sm fw-semibold">Cerrar Sesión</button>
            </form>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="card shadow-sm border-0 p-4">
            <div class="card-body text-center">
                <h2 class="fw-bold text-secondary">¡Hola, {{ Auth::user()->name }}! 👋</h2>
                <p class="text-muted mt-2">Has iniciado sesión correctamente con <strong>{{ Auth::user()->email }}</strong>.</p>
            </div>
        </div>
    </div>

</body>
</html>