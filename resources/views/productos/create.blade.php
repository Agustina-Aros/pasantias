<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Producto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex align-items-center justify-content-center vh-100">

    <div class="card shadow-sm border-0 p-4" style="width: 100%; max-width: 400px; border-radius: 12px;">
        <div class="card-body">
            <h3 class="text-center fw-bold mb-4 text-primary">Crear Producto</h3>

            @if ($errors->any())
                <div class="alert alert-danger py-2 mb-3">
                    <ul class="mb-0 ps-3 small">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('productos.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="nombre" class="form-label fw-semibold">Nombre del Producto</label>
                    <input type="text" name="nombre" id="nombre" class="form-control" value="{{ old('nombre') }}" placeholder="Ej. Teclado Mecánico" required autofocus>
                </div>

                <div class="mb-3">
                    <label for="precio" class="form-label fw-semibold">Precio</label>
                    <input type="number" step="0.01" name="precio" id="precio" class="form-control" value="{{ old('precio') }}" placeholder="0.00" required>
                </div>

                <div class="mb-3">
                    <label for="stock" class="form-label fw-semibold">Stock</label>
                    <input type="number" name="stock" id="stock" class="form-control" value="{{ old('stock') }}" placeholder="0" required>
                </div>

                <button type="submit" class="btn btn-primary w-100 py-2 fw-semibold mt-2">Guardar Producto</button>
            </form>

            <div class="text-center mt-3">
                <a href="{{ route('home') }}" class="text-decoration-none small text-muted">← Volver al Panel Principal</a>
            </div>
        </div>
    </div>

</body>
</html>