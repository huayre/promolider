<?php
use Illuminate\Support\Facades\Route;

Route::resource('paquete',PaqueteController::class);
Route::resource('producto',ProductoController::class);
