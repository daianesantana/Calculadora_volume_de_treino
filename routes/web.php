<?php

use App\Http\Controllers\CalculoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [CalculoController::class, 'index'])->name('calcular.index');
Route::post('/store', [CalculoController::class, 'store'])->name('calcular.salvar');
Route::get('/show/{id}',[CalculoController::class, 'show'])->name('calcular.exibir');


