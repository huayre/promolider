<?php
use Illuminate\Support\Facades\Route;

Route::resource('paquete',PaqueteController::class);
Route::resource('curso',CursoController::class);
Route::resource('anuncio',AnuncioController::class);
Route::resource('reconsumo',ReconsumoController::class);
