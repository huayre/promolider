<?php

use Illuminate\Support\Facades\Route;
use  Modules\Redbinaria\Http\Controllers\AfiliadoController;
use  Modules\Redbinaria\Http\Controllers\ArbolBinarioController;
use  Modules\Redbinaria\Http\Controllers\OficinaController;

Route::middleware(['auth'])->group(function () {
    Route::get('nuevoregistro', [AfiliadoController::class, 'nuevoregistro'])->name('nuevoregistro');
    Route::post('guardarregistro', [AfiliadoController::class, 'registro'])->name('guardarregistro');
    Route::get('arbolbinario', [ArbolBinarioController::class, 'albolbinario'])->name('arbolbinario');
});
    //Oficina
    Route::get('mi_oficina',[OficinaController::class, 'oficina'])->name('mi_oficina');
    Route::get('oficina_inicio/{id_afiliado}/{rama}', [OficinaController::class, 'inicio'])->name('oficina_inicio');
    Route::get('oficina_registro/{id_afiliado}/{rama}', [OficinaController::class, 'registro'])->name('oficina_registro');
    Route::get('oficina_cursos/{id_afiliado}/{rama}', [OficinaController::class, 'cursos'])->name('oficina_cursos');
    Route::get('detalle_curso/{id_afiliado}/{rama}/{id_curso}', [OficinaController::class, 'detalleCurso'])->name('detalle_curso');

