<?php
use Illuminate\Support\Facades\Route;
use Modules\Web\Http\Controllers\WebController;
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


Route::get('/', [WebController::class, 'index'])->name('web::inicio.index');
Route::get('/nosotros', [WebController::class,'nosotros'])->name('web::nosotros.index');
Route::get('/productos', [WebController::class,'productos'])->name('web::productos.index');

Route::get('/contacto', [WebController::class,'contacto'])->name('web::contacto.index');
