<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex align-items-center justify-content-center vh-100">

    <div class="card shadow-sm border-0 p-4" style="width: 100%; max-width: 400px; border-radius: 12px;">
        <div class="card-body">
            <h3 class="text-center fw-bold mb-4 text-primary">Iniciar Sesión</h3>

            @if ($errors->any())
                <div class="alert alert-danger py-2 mb-3">
                    <ul class="mb-0 ps-3 small">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('login') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="email" class="form-label fw-semibold">Correo Electrónico</label>
                    <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" placeholder="usuario@correo.com" required autofocus>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label fw-semibold">Contraseña</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="••••••••" required>
                </div>

                <button type="submit" class="btn btn-primary w-100 py-2 fw-semibold mt-2">Ingresar</button>
            </form>

            <div class="text-center mt-3">
                <small class="text-muted">¿No tienes cuenta? <a href="{{ route('register') }}" class="text-decoration-none">Regístrate aquí</a></small>
            </div>
        </div>
    </div>

</body>
</html>