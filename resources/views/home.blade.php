<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Principal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <!-- Navbar Adaptable con Menú Desplegable -->
    <nav class="navbar navbar-expand-md navbar-dark bg-primary shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">Mi Sistema</a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse mt-2 mt-md-0" id="navbarContent">
                <div class="ms-auto d-flex flex-column flex-md-row gap-2 w-100 w-md-auto">
                    <!-- Botón de Crear Producto -->
                    <a href="{{ route('productos.create') }}" class="btn btn-light btn-sm fw-semibold text-primary w-100 w-md-auto text-center">
                        ➕ Crear Producto
                    </a>

                    <!-- Botón de Cerrar Sesión -->
                    <form action="{{ route('logout') }}" method="POST" class="m-0 w-100 w-md-auto">
                        @csrf
                        <button type="submit" class="btn btn-outline-light btn-sm fw-semibold w-100">Cerrar Sesión</button>
                    </form>
                </div>
            </div>
        </div>
    </nav>

    <div class="container my-4 px-3 px-md-4">
        <!-- Saludo al usuario -->
        <div class="card shadow-sm border-0 p-2 p-md-3 mb-4">
            <div class="card-body">
                <h4 class="fw-bold text-secondary mb-1">¡Hola, {{ Auth::user()->nombre }}! 👋</h4>
                <p class="text-muted mb-0 small text-md-body">Has iniciado sesión correctamente con <strong>{{ Auth::user()->email }}</strong>.</p>
            </div>
        </div>

        <!-- Alerta de éxito -->
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show mb-4" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <!-- Tabla CRUD de Productos -->
        <div class="card shadow-sm border-0 p-2 p-md-4">
            <div class="card-body p-2 p-md-3">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="fw-bold text-primary mb-0">Listado de Productos</h4>
                </div>

                <div class="table-responsive">
                    <table class="table table-hover align-middle mb-0">
                        <thead class="table-light text-nowrap">
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Descripción</th>
                                <th>Precio</th>
                                <th>Stock</th>
                                <th class="text-center">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($productos as $producto)
                                <tr>
                                    <td class="fw-bold text-secondary">{{ $producto->id }}</td>
                                    <td class="text-nowrap">{{ $producto->nombre }}</td>
                                    <td class="text-truncate" style="max-width: 200px;">{{ $producto->descripcion ?? 'Sin descripción' }}</td>
                                    <td class="text-nowrap">${{ number_format($producto->precio, 2) }}</td>
                                    <td>{{ $producto->stock }}</td>
                                    <td class="text-center text-nowrap">
                                        <div class="d-inline-flex gap-1">
                                            <a href="{{ route('productos.edit', $producto->id) }}" class="btn btn-warning btn-sm fw-semibold">
                                                ✏️ <span class="d-none d-sm-inline">Editar</span>
                                            </a>
                                            <form action="{{ route('productos.destroy', $producto->id) }}" method="POST" class="d-inline" onsubmit="return confirm('¿Estás seguro de que deseas eliminar este producto?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm fw-semibold">
                                                    🗑️ <span class="d-none d-sm-inline">Eliminar</span>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center text-muted py-3">
                                        No hay productos registrados en la base de datos.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-center">
                        {{ $productos->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>