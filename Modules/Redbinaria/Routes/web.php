<?php

use Illuminate\Support\Facades\Route;
use  Modules\Redbinaria\Http\Controllers\AfiliadoController;
use  Modules\Redbinaria\Http\Controllers\ArbolBinarioController;

//*Route::middleware(['auth'])->group(function () {
    Route::get('nuevoregistro', [AfiliadoController::class, 'nuevoregistro'])->name('nuevoregistro');
    Route::post('guardarregistro', [AfiliadoController::class, 'registro'])->name('guardarregistro');
    Route::get('arbolbinario', [ArbolBinarioController::class, 'albolbinario'])->name('arbolbinario');
//});
