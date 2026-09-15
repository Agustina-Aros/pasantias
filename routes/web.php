<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;

<<<<<<< HEAD
// Rutas Públicas (Invitados)
Route::middleware('guest')->group(function () {
    // Registro
    Route::get('/registro', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('/registro', [RegisterController::class, 'store']);

    // Login
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
});

// Rutas Protegidas (Solo Usuarios Autenticados)
Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('home');
    })->name('home');

    // Cerrar Sesión
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});
=======
// Ruta raíz
Route::get('/', function () {
    return view('welcome');
});

// Rutas de Registro de Usuario (Vista e Inserción)
Route::get('/crear-cuenta', function () {
    return view('verificar.crear');
})->name('register');

Route::post('/crear-cuenta', function (Request $request) {
    $request->validate([
        'nombre' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:6',
    ]);

    $nombre = $request->input('nombre');
    $email = $request->input('email');
    $passwordEncriptada = Hash::make($request->input('password'));

    DB::table('users')->insert([
        'name' => $nombre,
        'email' => $email,
        'password' => $passwordEncriptada,
        'created_at' => now(),
        'updated_at' => now(),
    ]);

    return redirect('/crear-cuenta')->with('mensaje', '¡Usuario registrado correctamente!');
});

// Rutas de Login (Vista e Intento de Sesión)
Route::get('/login', function () {
    return view('verificar.login');
})->name('login');

Route::post('/login', function (Request $request) {
    $credentials = $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();
        return redirect()->intended('/dashboard'); 
    }

    return back()->withErrors([
        'email' => 'Las credenciales no coinciden con nuestros registros.',
    ]);
});

// Rutas Protegidas por Autenticación
Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::post('/logout', function (Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    })->name('logout');

});
// Rutas de Registro
Route::get('/registro', [RegisterController::class, 'create'])->name('register');
Route::post('/registro', [RegisterController::class, 'store']);

// Rutas de Login
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
>>>>>>> 1410b35cf92c8fa96068a53f7f71cc218bebd5f3
