<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;

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