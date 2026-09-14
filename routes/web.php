<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;

Route::get('/', function () {
    return view('welcome');
});

// Mostrar formulario de registro
Route::get('/registro', [RegisterController::class, 'create'])->name('register');

// Guardar datos del usuario
Route::post('/registro', [RegisterController::class, 'store']);