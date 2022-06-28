<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatechumenController;
use App\Http\Controllers\CatechismsController;
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
//Rutas para la abla catecumenos

Route::resource('catechumens', CatechumenController::class);
Route::resource('catechisms', CatechismsController::class);

Route::get('asistencias/{catechism}', [CatechismsController::class, 'asistencias'])->name('asistencias');
Route::get('registrarAsistencia/{catechism}', [CatechismsController::class, 'registrarAsistencia'])->name('registrarAsistencia');

Route::delete('refrescar', [CatechismsController::class, 'refrescar'])->name('refrescar');


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

