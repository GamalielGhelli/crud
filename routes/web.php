<?php

use App\Http\Controllers\CarroController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;


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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::controller(LoginController::class)->group(function() {
    Route::get('/login', 'index')->name('login.index');
    Route::post('/login', 'store')->name('login.store');
    Route::post('/logout', 'destroy')->name('login.destroy');
});

Route::controller(CarroController::class)->group(function() {
    Route::get('/carros', 'index')->name('carros.index');
    Route::get('/criar', 'create')->name('carros.create');

});