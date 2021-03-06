<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/crearusuario', function () {
    return view('auth.register');
});

Route::get('/dash','App\Http\Controllers\DashboardController@index');

Route::resource('/productos','App\Http\Controllers\ProductoController');
Route::resource('/costodeconservacions','App\Http\Controllers\ReportesController');
Route::resource('/empleados','App\Http\Controllers\EmpleadoController');


Route::get('/reportes/costodeconservacions',[\App\Http\Controllers\ReportesController::class, 'showCostoConservacion']);
Route::get('/reportes/costoPedido',[\App\Http\Controllers\ReportesController::class, 'showCostoPedido']);
Route::get('/reportes/indiceExactitud',[\App\Http\Controllers\ReportesController::class, 'showIndiceExactitud']);
Route::put('/reportes/indiceExactitud/{id_producto}', [\App\Http\Controllers\ReportesController::class, 'updateStockReal']);


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

