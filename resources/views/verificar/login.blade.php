<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión - Pasantía</title>
    <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">
    <link rel="icon" type="image/png" href="{{ asset('imagenes/icono.png') }}">
</head>
<body>

    <main class="login-container">
        <h2>Inicio de Sesión</h2>

        {{-- Errores de credenciales (email o contraseña incorrectos) --}}
        @if ($errors->any())
            <div class="alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="/login" method="POST">
            @csrf

            <div class="input-group">
                <label for="email">Correo electrónico</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" required autofocus>
            </div>

            <div class="input-group">
                <label for="password">Contraseña</label>
                <input type="password" id="password" name="password" required>
            </div>

            <button type="submit">Iniciar sesión</button>
        </form>

        <div class="form-footer">
            <a href="/crear-cuenta">¿No tienes cuenta? Regístrate</a>
        </div>
    </main>

</body>
</html>