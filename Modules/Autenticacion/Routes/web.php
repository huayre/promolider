<?php

use Illuminate\Support\Facades\Route;
use  Modules\Autenticacion\Http\Controllers\AutenticacionController;

Route::view('/','autenticacion::login')->name('login');
Route::post('iniciosesion', [AutenticacionController::class, 'login'])->name('iniciosesion');

Route::middleware(['auth'])->group(function () {

    Route::get('cerrar_sesion', [AutenticacionController::class, 'cerrarSesion'])->name('cerrar_sesion');
    Route::view('inicio', 'inicio')->name('inicio');


    Route::get('nuevoregistro', [AutenticacionController::class, 'nuevoregistro'])->name('nuevoregistro');
    Route::post('guardarregistro', [AutenticacionController::class, 'registro'])->name('guardarregistro');

    Route::view('prueba', 'autenticacion::prueba');

});
