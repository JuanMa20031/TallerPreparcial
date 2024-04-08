<?php

use App\Http\Controllers\VentaController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('ventas', \App\Http\Controllers\VentaController::class);

Route::get('/ventas', [VentaController::class, 'index'])->name('index');
Route::get('/ventas/create', [VentaController::class, 'create'])->name('create');
Route::post('/ventas', [VentaController::class, 'store'])->name('store');
Route::get('/ventas/{venta}/edit', [VentaController::class, 'edit'])->name('edit');
Route::put('/ventas/{venta}', [VentaController::class, 'update'])->name('update');
Route::delete('/ventas/{venta}', [VentaController::class, 'destroy'])->name('destroy');
