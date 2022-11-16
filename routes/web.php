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
Route::get('admin/gerencia/show', [App\Http\Controllers\GerenciaController::class, 'show'])->name('gerencia.show');
Route::post('admin/gerencia/store', [App\Http\Controllers\GerenciaController::class, 'store'])->name('gerencia.store');


/*

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

*/


