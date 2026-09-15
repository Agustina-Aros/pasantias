<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductoController;
use App\Models\producto; // Cambiar a Producto si tu modelo empieza con mayúscula

// Rutas Públicas (Invitados)
Route::middleware('guest')->group(function () {
    Route::get('/registro', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('/registro', [RegisterController::class, 'store']);

    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
});

// Rutas Protegidas (Usuarios Autenticados)
Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        $productos = producto::all();
        return view('home', compact('productos'));
    })->name('home');

    // Rutas para editar productos
    Route::get('/productos/{id}/edit', [ProductoController::class, 'edit'])->name('productos.edit');
    Route::put('/productos/{id}', [ProductoController::class, 'update'])->name('productos.update');

    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});