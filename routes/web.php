<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\RegisterController; // Ubicado al inicio del archivo

// Ruta raíz
Route::get('/', function () {
    return view('welcome');
});

// Rutas de Registro con Controlador
Route::get('/registro', [RegisterController::class, 'create'])->name('register');
Route::post('/registro', [RegisterController::class, 'store']);

// Rutas de Login
Route::get('/login', function () {
    return view('verificar.login');
});

Route::post('/login', function (Request $request) {
    $nombre = $request->input('nombre');
    $email = $request->input('email');
    $passwordEncriptada = Hash::make($request->input('password'));

    return "Formulario recibido correctamente.<br>Usuario: " . $nombre;
});

// Rutas de Crear Cuenta
Route::get('/crear-cuenta', function () {
    return view('verificar.crear');
});

Route::post('/crear-cuenta', function (Request $request) {
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

    return redirect('/crear-cuenta')->with('mensaje', "¡Usuario registrado correctamente!");
});