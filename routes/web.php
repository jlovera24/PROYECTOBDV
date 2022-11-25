<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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


Auth::routes();

//Pantalla principal

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Gerencias

Route::get('admin/gerencia/index', [App\Http\Controllers\GerenciaController::class, 'index'])->name('gerencia.index');
Route::get('admin/gerencia/create', [App\Http\Controllers\GerenciaController::class, 'create'])->name('gerencia.create');
Route::get('admin/gerencia/show/{id}', [App\Http\Controllers\GerenciaController::class, 'show'])->name('gerencia.show');
Route::post('admin/gerencia/store', [App\Http\Controllers\GerenciaController::class, 'store'])->name('gerencia.store');
Route::get('admin/gerencia/edit/{id}', [App\Http\Controllers\GerenciaController::class, 'edit'])->name('gerencia.edit');
Route::put('admin/gerencia/update/{id}', [App\Http\Controllers\GerenciaController::class, 'update'])->name('gerencia.update');
Route::delete('admin/gerencia/destroy/{id}', [App\Http\Controllers\GerenciaController::class, 'destroy'])->name('gerencia.destroy');

//Cargos

Route::get('admin/cargo/index', [App\Http\Controllers\CargoController::class, 'index'])->name('cargo.index');
Route::get('admin/cargo/create', [App\Http\Controllers\CargoController::class, 'create'])->name('cargo.create');
Route::get('admin/cargo/show/{id}', [App\Http\Controllers\CargoController::class, 'show'])->name('cargo.show');
Route::post('admin/cargo/store', [App\Http\Controllers\CargoController::class, 'store'])->name('cargo.store');
Route::get('admin/cargo/edit/{id}', [App\Http\Controllers\CargoController::class, 'edit'])->name('cargo.edit');
Route::put('admin/cargo/update/{id}', [App\Http\Controllers\CargoController::class, 'update'])->name('cargo.update');
Route::delete('admin/cargo/destroy/{id}', [App\Http\Controllers\CargoController::class, 'destroy'])->name('cargo.destroy');

//Ubicaciones Físicas

Route::get('admin/ubicacion_fisica/index', [App\Http\Controllers\Ubicacion_FisicaController::class, 'index'])->name('ubicacion_fisica.index');
Route::get('admin/ubicacion_fisica/create', [App\Http\Controllers\Ubicacion_FisicaController::class, 'create'])->name('ubicacion_fisica.create');
Route::get('admin/ubicacion_fisica/show/{id}', [App\Http\Controllers\Ubicacion_FisicaController::class, 'show'])->name('ubicacion_fisica.show');
Route::post('admin/ubicacion_fisica/store', [App\Http\Controllers\Ubicacion_FisicaController::class, 'store'])->name('ubicacion_fisica.store');
Route::get('admin/ubicacion_fisica/edit/{id}', [App\Http\Controllers\Ubicacion_FisicaController::class, 'edit'])->name('ubicacion_fisica.edit');
Route::put('admin/ubicacion_fisica/update/{id}', [App\Http\Controllers\Ubicacion_FisicaController::class, 'update'])->name('ubicacion_fisica.update');
Route::delete('admin/ubicacion_fisica/destroy/{id}', [App\Http\Controllers\Ubicacion_FisicaController::class, 'destroy'])->name('ubicacion_fisica.destroy');


//Libras

Route::get('admin/libra/index', [App\Http\Controllers\LibraController::class, 'index'])->name('libra.index');
Route::get('admin/libra/create', [App\Http\Controllers\LibraController::class, 'create'])->name('libra.create');
Route::get('admin/libra/show/{id}', [App\Http\Controllers\LibraController::class, 'show'])->name('libra.show');
Route::post('admin/libra/store', [App\Http\Controllers\LibraController::class, 'store'])->name('libra.store');
Route::get('admin/libra/edit/{id}', [App\Http\Controllers\LibraController::class, 'edit'])->name('libra.edit');
Route::put('admin/libra/update/{id}', [App\Http\Controllers\LibraController::class, 'update'])->name('libra.update');
Route::delete('admin/libra/destroy/{id}', [App\Http\Controllers\LibraController::class, 'destroy'])->name('libra.destroy');

//Solicitantes

Route::get('admin/solicitante/index', [App\Http\Controllers\SolicitanteController::class, 'index'])->name('solicitante.index');
Route::get('admin/solicitante/create', [App\Http\Controllers\SolicitanteController::class, 'create'])->name('solicitante.create');
Route::get('admin/solicitante/show/{id}', [App\Http\Controllers\SolicitanteController::class, 'show'])->name('solicitante.show');
Route::post('admin/solicitante/store', [App\Http\Controllers\SolicitanteController::class, 'store'])->name('solicitante.store');
Route::get('admin/solicitante/edit/{id}', [App\Http\Controllers\SolicitanteController::class, 'edit'])->name('solicitante.edit');
Route::put('admin/solicitante/update/{id}', [App\Http\Controllers\SolicitanteController::class, 'update'])->name('solicitante.update');
Route::delete('admin/solicitante/destroy/{id}', [App\Http\Controllers\SolicitanteController::class, 'destroy'])->name('solicitante.destroy');

//Especialistas

Route::get('admin/especialista/index', [App\Http\Controllers\EspecialistaController::class, 'index'])->name('especialista.index');
Route::get('admin/especialista/create', [App\Http\Controllers\EspecialistaController::class, 'create'])->name('especialista.create');
Route::get('admin/especialista/show/{id}', [App\Http\Controllers\EspecialistaController::class, 'show'])->name('especialista.show');
Route::post('admin/especialista/store', [App\Http\Controllers\EspecialistaController::class, 'store'])->name('especialista.store');
Route::get('admin/especialista/edit/{id}', [App\Http\Controllers\EspecialistaController::class, 'edit', 'edi'])->name('especialista.edit');
Route::put('admin/especialista/update/{id}', [App\Http\Controllers\EspecialistaController::class, 'update'])->name('especialista.update');
Route::delete('admin/especialista/destroy/{id}', [App\Http\Controllers\EspecialistaController::class, 'destroy'])->name('especialista.destroy');
Route::get('admin/especialista/more/{id}', [App\Http\Controllers\EspecialistaController::class, 'more'])->name('especialista.more');

//Equipos

Route::get('admin/equipo/index', [App\Http\Controllers\EquipoController::class, 'index'])->name('equipo.index');
Route::get('admin/equipo/create', [App\Http\Controllers\EquipoController::class, 'create'])->name('equipo.create');
Route::get('admin/equipo/show/{id}', [App\Http\Controllers\EquipoController::class, 'show'])->name('equipo.show');
Route::post('admin/equipo/store', [App\Http\Controllers\EquipoController::class, 'store'])->name('equipo.store');
Route::get('admin/equipo/edit/{id}', [App\Http\Controllers\EquipoController::class, 'edit', 'edi'])->name('equipo.edit');
Route::put('admin/equipo/update/{id}', [App\Http\Controllers\EquipoController::class, 'update'])->name('equipo.update');
Route::delete('admin/equipo/destroy/{id}', [App\Http\Controllers\EquipoController::class, 'destroy'])->name('equipo.destroy');

//Solicitudes

Route::get('admin/solicitud/index', [App\Http\Controllers\SolicitudController::class, 'index'])->name('solicitud.index');
Route::get('admin/solicitud/create', [App\Http\Controllers\SolicitudController::class, 'create'])->name('solicitud.create');
Route::get('admin/solicitud/show/{id}', [App\Http\Controllers\SolicitudController::class, 'show'])->name('solicitud.show');
Route::post('admin/solicitud/store', [App\Http\Controllers\SolicitudController::class, 'store'])->name('solicitud.store');
Route::get('admin/solicitud/edit/{id}', [App\Http\Controllers\SolicitudController::class, 'edit', 'edi'])->name('solicitud.edit');
Route::put('admin/solicitud/update/{id}', [App\Http\Controllers\SolicitudController::class, 'update'])->name('solicitud.update');
Route::delete('admin/solicitud/destroy/{id}', [App\Http\Controllers\SolicitudController::class, 'destroy'])->name('solicitud.destroy');
Route::get('admin/solicitud/more/{id}', [App\Http\Controllers\SolicitudController::class, 'more'])->name('solicitud.more');




/*

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

*/


