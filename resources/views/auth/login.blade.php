<form action="{{ route('login') }}" method="POST">
    @csrf
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Contraseña" required>
    <button type="submit">Ingresar</button>
<<<<<<< Updated upstream
</form>
<p>¿No tienes cuenta? <a href="{{ route('register') }}">Regístrate aquí</a></p>
=======
</form>
>>>>>>> Stashed changes
