<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');

    use App\Http\Controllers\RegisterController;

// Mostrar formulario
Route::get('/registro', [RegisterController::class, 'create'])->name('register');

// Guardar usuario
Route::post('/registro', [RegisterController::class, 'store']);
});
