<?php

use App\Http\Controllers\BienvenidoController;
use App\Http\Controllers\InstitucionalController;
use App\Http\Controllers\CalendarioController;
use App\Http\Controllers\ServicioController;
use App\Http\Controllers\FAQController;
use App\Http\Controllers\RutaController;
use App\Http\Controllers\TerminoCondicionController;
use App\Http\Controllers\LibroReclamacionController;

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

/*Route::get('/', function () {
    return view('bienvenido');
});*/
Route::get('/', [BienvenidoController::class, 'index']);
Route::get('/servicios', [ServicioController::class, 'index'])->name('seccion.servicios');
Route::get('/preguntas-frecuentes', [FAQController::class, 'index'])->name('seccion.preguntas-frecuentes');
Route::get('/rutas', [RutaController::class, 'index'])->name('seccion.rutas');
Route::get('/calendario-eventos', [CalendarioController::class, 'index'])->name('seccion.calendario-eventos');
Route::get('/terminos-condiciones', [TerminoCondicionController::class, 'index'])->name('seccion.terminos-condiciones');

Route::get('/nosotros', [InstitucionalController::class, 'index'])->name('seccion.nosotros');
Route::get('/libro-reclamaciones', [LibroReclamacionController::class, 'index'])->name('seccion.libro-reclamaciones');



/*Route::get('/nosotros', function () {
    return view('secciones.nosotros');
})->name('seccion.nosotros');*/














