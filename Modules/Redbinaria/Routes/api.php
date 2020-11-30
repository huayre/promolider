<?php

use Illuminate\Support\Facades\Route;
use  Modules\Redbinaria\Http\Controllers\AfiliadoController;
use  Modules\Redbinaria\Http\Controllers\ArbolBinarioController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::post('guardarregistro', [AfiliadoController::class, 'registro'])->name('guardarregistro');
Route::get('arbolbinario', [ArbolBinarioController::class, 'albolbinario'])->name('arbolbinario');
