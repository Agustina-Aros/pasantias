<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

Route::get('/', function () {
    return view('welcome');

    use App\Http\Controllers\RegisterController;

// Mostrar formulario
Route::get('/registro', [RegisterController::class, 'create'])->name('register');

// Guardar usuario
Route::post('/registro', [RegisterController::class, 'store']);
});

Route::get('/login', function () {
    return view('verificar.login');
});

Route::post('/login', function (Request $request) {
    $nombre = $request->input('nombre');
    $email = $request->input('email');
    $passwordEncriptada = Hash::make($request->input('password'));

    return "Formulario recibido correctamente.<br>Usuario: " . $nombre;
});