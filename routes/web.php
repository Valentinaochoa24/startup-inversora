<?php

use App\Http\Controllers\AdministracionController;
use App\Http\Controllers\ContactanosController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\EventosController;
use App\Http\Controllers\FormacionController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\PropuestasController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UtilidadesController;
use App\Models\Utilidades;
use Illuminate\Support\Facades\Route;

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

Route::get('/nosotros', function () {
    return view('nosotros.nosotros');
});
Route::get('/inversiones', function () {
    return view('servicios.inversiones');
});
Route::get('/financiacion', function () {
    return view('servicios.financiacion');
});
Route::get('/utilidades', function () {
    return view('servicios.utilidades');
});
Route::get('/asesoria', function () {
    return view('servicios.asesoria');
});
Route::get('/', [InicioController::class, 'index']);
Route::get('inicio', [InicioController::class, 'index']);
Route::get('eventos', [EventosController::class, 'index']);
Route::get('eventos/{id}', [EventosController::class, 'showForId']);
Route::get('propuestas', [PropuestasController::class, 'index']);
Route::get('formacion', [FormacionController::class, 'index']);
Route::get('formacion/videos', [FormacionController::class, 'videos']);
Route::get('formacion/infografia', [FormacionController::class, 'infografia']);
Route::get('contactanos', [ContactanosController::class, 'index'])->name('contactanos');
Route::post('contactanos', [ContactanosController::class, 'store'])->name('mensaje.submit');
Route::get('ingresar', [UserController::class, 'showRegister'])->name('ingresar');
Route::post('ingresar', [UserController::class, 'register'])->name('registro.submit');
Route::post('login', [AdministracionController::class, 'login'])->name('login');
Route::post('/logout', [AdministracionController::class, 'logout']);

Route::group(['middleware' => 'auth'], function () {
    Route::get('administracion', [AdministracionController::class, 'index']);
    Route::get('administracion/usuario', [AdministracionController::class, 'user']);
    Route::get('administracion/utilidades', [UtilidadesController::class, 'index']);
    Route::get('administracion/propuestas', [PropuestasController::class, 'show']);
    Route::post('propuestas/propuestas/store', [PropuestasController::class, 'store']);
    Route::get('administracion/eventos', [EventosController::class, 'show']);
    Route::get('administracion/empresa', [EmpresaController::class, 'index']);
    Route::post('administracion/eventos/store', [EventosController::class, 'store']);
    Route::post('propuestas/propuestas/aprobar', [PropuestasController::class, 'aprobar']);
    Route::post('administracion/editarEmpresa/{id}', [EmpresaController::class, 'edit']);

});
