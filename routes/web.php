<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;

<<<<<<< HEAD
=======
// Ruta raíz
Route::get('/', function () {
    return view('welcome');
});

// Rutas de Registro con Controlador
Route::get('/registro', [RegisterController::class, 'create'])->name('register');
Route::post('/registro', [RegisterController::class, 'store']);

    return redirect()->route('login');
});

Route::get('/registro', [RegisterController::class, 'create'])->name('register');
Route::post('/registro', [RegisterController::class, 'store']);

Route::get('/login', function () {
    return view('verificar.login');
})->name('login');


Route::post('/login', function (Request $request) {
    
    $credentials = $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

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
    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();
        return redirect()->intended('/dashboard'); 
    }

    return back()->withErrors([
        'email' => 'Las credenciales no coinciden con nuestros registros.',
    ]);
});



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

>>>>>>> fcb114ceb2b05b3fd60373f8e95907fa603dfbe4
Route::get('/', function () {
    return view('welcome');
});

// Rutas de Registro
Route::get('/registro', [RegisterController::class, 'create'])->name('register');
Route::post('/registro', [RegisterController::class, 'store']);

// Rutas de Login
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
<<<<<<< HEAD
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
=======

// Guardar datos del usuario
Route::post('/registro', [RegisterController::class, 'store']);

?>
>>>>>>> fcb114ceb2b05b3fd60373f8e95907fa603dfbe4
