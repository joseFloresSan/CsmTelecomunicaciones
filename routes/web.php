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
Route::resource('/empleados','App\Http\Controllers\EmpleadoController');
Route::resource('/costodeconservacions','App\Http\Controllers\CostoDeConservacionController');






Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


