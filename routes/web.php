<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PropiedadesController;

use App\Http\Controllers\Usercontroller;

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

Route::get('/Busqueda', [PropiedadesController::class, 'buscar'])->name('propiedades.buscar');

// Ruta para crear una nueva propiedad
Route::get('/Publicar', function () {
    return view('Propiedades.create'); })->name('Publicacion');
//ruta de regreso 
Route::get('/inicio', function () {
    return view('PaginaPrincipal'); })->name('Regresarinicio');
// Ruta para mostrar la propiedad
Route::get('/propiedad/{id}', [PropiedadesController::class, 'Propshow'])->name('propiedadshow');

// Ruta para almacenar el comentario
Route::post('/comentarios', [PropiedadesController::class, 'almacenar'])->name('comentarios.store');

// Ruta para mostrar la lista de propiedades
Route::get('/listado', [PropiedadesController::class, 'Listado'])->name('Listado');

// Ruta para el mensaje
Route::get('/mensaje/{id}', [Usercontroller::class, 'Mensajeshow'])->name('mensaje.show');
// ruta enviar mensaje 

Route::post('/enviar-mensaje', [PropiedadesController::class, 'enviar'])->name('enviar.mensaje');

//ruta para mostrar perfil de usuario
Route::get('/user/{id}', [PropiedadesController::class, 'Usershow'])->name('usershow');
//ruta de perfil de usuario autentificado
Route::get('/user/', [PropiedadesController::class, 'Myusershow'])->name('Myusershow');
// boton de view de editar
Route::get('/Propiedad/{id}/editar', [PropiedadesController::class, 'Propupdateshow'])->name('propiedadesview.edit');

Route::put('/propiedades/{id}', [PropiedadesController::class, 'Propupdate'])->name('propiedades.update');
// eliminacion logica
Route::put('/propiedades/{id}/eliminar', [PropiedadesController::class, 'Propdelete'])->name('propiedades.updateprop');

Route::post('/propiedades', [PropiedadesController::class, 'CreateProp'])->name('propiedades.store');
//ruta mostrar mensaje 
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/PaginaPrincipal', [PropiedadesController::class, 'MostrarProp'])->name('PaginaPrincipal');
});
Route::get('/verificar-auth', function () {
    return response()->json(['authenticated' => Auth::check()]);
})->name('verificar.auth');


