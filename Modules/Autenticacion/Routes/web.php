<?php

use Illuminate\Support\Facades\Route;
use  Modules\Autenticacion\Http\Controllers\AutenticacionController;

Route::get('login',[AutenticacionController::class,'vistaLogin'])->name('login');
Route::post('iniciosesion', [AutenticacionController::class, 'login'])->name('iniciosesion');

Route::middleware(['auth'])->group(function () {
    Route::get('cerrar_sesion', [AutenticacionController::class, 'cerrarSesion'])->name('cerrar_sesion');
    Route::view('inicio', 'autenticacion::inicio')->name('inicio');
    Route::view('prueba', 'autenticacion::prueba');

});
