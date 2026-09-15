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

    <div class="container mt-4">
        <!-- Saludo al usuario -->
        <div class="card shadow-sm border-0 p-3 mb-4">
            <div class="card-body">
                <h4 class="fw-bold text-secondary mb-1">¡Hola, {{ Auth::user()->nombre }}! 👋</h4>
                <p class="text-muted mb-0">Has iniciado sesión correctamente con <strong>{{ Auth::user()->email }}</strong>.</p>
            </div>
        </div>

        <!-- Alerta de éxito tras editar -->
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show mb-4" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

      

        <!-- Tabla CRUD de Productos -->
        <div class="card shadow-sm border-0 p-4">
            <div class="card-body">
                <h4 class="fw-bold text-primary mb-3">Listado de Productos</h4>

                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead class="table-light">
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Precio</th>
                                <th>Stock</th>
                                <th class="text-center">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($productos as $producto)
                                <tr>
                                    <td>{{ $producto->id }}</td>
                                    <td>{{ $producto->nombre }}</td>
                                    <td>${{ number_format($producto->precio, 2) }}</td>
                                    <td>{{ $producto->stock }}</td>
                                    <td class="text-center">
                                        <a href="{{ route('productos.edit', $producto->id) }}" class="btn btn-warning btn-sm fw-semibold">
                                            ✏️ Editar
                                        </a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center text-muted py-3">
                                        No hay productos registrados en la base de datos.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</body>
</html>