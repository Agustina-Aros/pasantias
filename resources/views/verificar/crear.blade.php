<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Cuenta - Pasantía</title>
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
</head>
<body>

    <main class="login-container">
        <h2>Registro de Usuario</h2>

        @if(session('mensaje'))
            <p style="color: green; text-align: center; margin-bottom: 15px;">
                {{ session('mensaje') }}
            </p>
        @endif

        <form action="/crear-cuenta" method="POST">
            @csrf

            <div class="input-group">
                <label for="nombre">Nombre completo</label>
                <input type="text" id="nombre" name="nombre" value="{{ old('nombre') }}" required>
            </div>

            <div class="input-group">
                <label for="email">Correo electrónico</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" required>
            </div>

            <div class="input-group">
                <label for="password">Contraseña</label>
                <input type="password" id="password" name="password" required>
            </div>

            <button type="submit">Registrarse</button>
        </form>

        <br>
        <div style="text-align: center;">
            <a href="/login" style="color: #2563eb; text-decoration: none; font-size: 14px;">¿Ya tienes cuenta? Inicia sesión</a>
        </div>
    </main>

</body>
</html>