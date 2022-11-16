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







/*

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

*/


