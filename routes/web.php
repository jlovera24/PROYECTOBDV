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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('admin/gerencia/index', [App\Http\Controllers\GerenciaController::class, 'index'])->name('gerencia.index');
Route::get('admin/gerencia/create', [App\Http\Controllers\GerenciaController::class, 'create'])->name('gerencia.create');
Route::get('admin/gerencia/show/{id}', [App\Http\Controllers\GerenciaController::class, 'show'])->name('gerencia.show');
Route::post('admin/gerencia/store', [App\Http\Controllers\GerenciaController::class, 'store'])->name('gerencia.store');
Route::get('admin/gerencia/edit/{id}', [App\Http\Controllers\GerenciaController::class, 'edit'])->name('gerencia.edit');
Route::put('admin/gerencia/update/{id}', [App\Http\Controllers\GerenciaController::class, 'update'])->name('gerencia.update');
Route::delete('admin/gerencia/destroy/{id}', [App\Http\Controllers\GerenciaController::class, 'destroy'])->name('gerencia.destroy');

/*

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

*/


