<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Producto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="{{ asset('imagenes/icono.png') }}">
</head>
<body class="bg-light">

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm mb-4">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ route('home') }}">Mi Sistema</a>
            <a href="{{ route('home') }}" class="btn btn-outline-light btn-sm fw-semibold">Volver al Inicio</a>
        </div>
    </nav>

    <div class="container" style="max-width: 500px;">
        <div class="card shadow-sm border-0 p-4">
            <h3 class="fw-bold mb-4 text-primary">Editar Producto #{{ $producto->id }}</h3>

            @if ($errors->any())
                <div class="alert alert-danger py-2 mb-3">
                    <ul class="mb-0 ps-3 small">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('productos.update', $producto->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="nombre" class="form-label fw-semibold">Nombre</label>
                    <input type="text" name="nombre" id="nombre" class="form-control" value="{{ old('nombre', $producto->nombre) }}" required>
                </div>

                <div class="mb-3">
                    <label for="descripcion" class="form-label fw-semibold">Descripción</label>
                    <input type="text" name="descripcion" id="descripcion" class="form-control" value="{{ old('descripcion', $producto->descripcion) }}" required>
                </div>

                <div class="mb-3">
                    <label for="precio" class="form-label fw-semibold">Precio</label>
                    <input type="number" step="0.01" name="precio" id="precio" class="form-control" value="{{ old('precio', $producto->precio) }}" required>
                </div>

                <div class="mb-3">
                    <label for="stock" class="form-label fw-semibold">Stock / Existencias</label>
                    <input type="number" name="stock" id="stock" class="form-control" value="{{ old('stock', $producto->stock) }}" required>
                </div>

                <div class="d-flex gap-2">
                    <button type="submit" class="btn btn-primary w-100 fw-semibold">Guardar Cambios</button>
                    <a href="{{ route('home') }}" class="btn btn-secondary w-100 fw-semibold">Cancelar</a>
                </div>
            </form>
        </div>
    </div>

</body>
</html>