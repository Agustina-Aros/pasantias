<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\RegisterController;

<<<<<<< Updated upstream

Route::get('/', function () {
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
=======
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
>>>>>>> Stashed changes

Route::get('/', function () {
    return view('welcome');
});

<<<<<<< Updated upstream
// Mostrar formulario de registro
Route::get('/registro', [RegisterController::class, 'create'])->name('register');

// Guardar datos del usuario
Route::post('/registro', [RegisterController::class, 'store']);

?>
=======
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/registro', [AuthController::class, 'showRegister'])->name('register');
Route::post('/registro', [AuthController::class, 'register']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/index', function () {
        return view('index'); 
    })->name('dashboard');
    

});
>>>>>>> Stashed changes
