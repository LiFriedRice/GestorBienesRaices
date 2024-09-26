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

Route::get('/', function () {
    return view('PaginaPrincipal');
});
Route::get('/', [PropiedadesController::class, 'MostrarProp']);
Route::get('/propiedades', function () {return view('Propiedades.create');})->name('Publicacion');
Route::get('/Registrarse', function () {return view('Usuarios.register');})->name('Registrarse');
Route::get('/IniciarSesion', function () {return view('Usuarios.login');})->name('IniciarSesion');