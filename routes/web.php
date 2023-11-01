<?php

use App\Http\Controllers\ServicioController;
use App\Http\Controllers\FAQController;
use App\Http\Controllers\RutaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('bienvenido');
});

Route::get('/servicios', [ServicioController::class, 'index'])->name('seccion.servicios');
Route::get('/preguntas-frecuentes', [FAQController::class, 'index'])->name('seccion.preguntas-frecuentes');
Route::get('/rutas', [RutaController::class, 'index'])->name('seccion.rutas');


Route::get('/nosotros', function () {
    return view('secciones.nosotros');
})->name('seccion.nosotros');











Route::get('/calendario-eventos', function () {
    return view('secciones.condiciones-de-viaje.calendario-eventos');
})->name('seccion.calendario-eventos');

Route::get('/terminos-condiciones', function () {
    return view('secciones.condiciones-de-viaje.terminos-condiciones');
})->name('seccion.terminos-condiciones');

Route::get('/libro-reclamaciones', function () {
    return view('secciones.libro-reclamaciones');
})->name('seccion.libro-reclamaciones');
