<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PropiedadesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Ruta principal que muestra la página principal con las propiedades.
Route::get('/', [PropiedadesController::class, 'MostrarProp'])->name('PaginaPrincipal');

// Ruta para crear una nueva propiedad
Route::get('/propiedades', function () {
    return view('Propiedades.create');
})->name('Publicacion');

// Ruta para mostrar la lista de propiedades
Route::get('/listado', [PropiedadesController::class, 'Listado'])->name('Listado');

// Ruta para la página de registro de usuario
Route::get('/registrarse', function () {
    return view('Usuarios.register');
})->name('Registrarse');

// Ruta para la página de inicio de sesión
Route::get('/iniciarsesion', function () {
    return view('Usuarios.login');
})->name('IniciarSesion');

Route::post('/propiedades', [PropiedadesController::class, 'store'])->name('propiedades.store');