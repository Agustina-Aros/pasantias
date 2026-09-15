<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Cuenta </title>
    <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">
</head>
<body>

    <main class="login-container">
        <h2>Registro de Usuario</h2>

        {{-- Mensaje de éxito al registrar --}}
        @if(session('mensaje'))
            <p class="alert-success">
                {{ session('mensaje') }}
            </p>
        @endif

        {{-- Mensajes de error de validación --}}
        @if ($errors->any())
            <div class="alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
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

        <div class="form-footer">
            <a href="/login">¿Ya tienes cuenta? Inicia sesión</a>
        </div>
    </main>

</body>
</html>