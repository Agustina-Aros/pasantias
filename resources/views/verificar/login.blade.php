<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>

    <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">
</head>
<body>

    <main class="login-container">
        <form action="/login" method="POST">
            {{-- Token de seguridad obligatorio en Laravel --}}
            @csrf

            <h2>Inicio de Sesión</h2>

            <div>
                <label for="nombre">Nombre completo</label>
                <input type="text" id="nombre" name="nombre" value="{{ old('nombre') }}" required>

                <label for="email">Correo electrónico</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" required autofocus>

                <label for="password">Contraseña</label>
                <input type="password" id="password" name="password" required>

                <button type="submit">Iniciar sesión</button>
            </div>
        </form>
    </main>

</body>
</html>