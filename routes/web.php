<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;

Route::get('/', function () {
    return view('welcome');
});

// Mostrar formulario
Route::get('/registro', [RegisterController::class, 'create'])->name('register');

// Guardar usuario
Route::post('/registro', [RegisterController::class, 'store']);