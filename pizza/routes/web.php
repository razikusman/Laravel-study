<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PizzaController;
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
    return view('welcome');
});

Route::get('/pizza', [PizzaController::class, 'index']) -> middleware('auth');
Route::get('/pizza/create', [PizzaController::class, 'create']);
Route::get('/pizza/{id}', [PizzaController::class, 'show']) -> middleware('auth');
Route::post('/pizza', [PizzaController::class, 'store']);
Route::delete('/pizza/{id}', [PizzaController::class, 'destroy']) -> middleware('auth');

Auth::routes([
    'register' => false
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
