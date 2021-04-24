<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PizzaController;
use App\Http\Controllers\HomeController;
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


Route::get('/', [HomeController::class, 'index']) ->name('home.index') ;
Route::get('/email', [HomeController::class, 'email']) ->name('home.email') ;

Route::post('/send/image', [HomeController::class, 'store']) ->name('home.store') ;

Route::get('/pizza', [PizzaController::class, 'index']) ->name('pizza.index') -> middleware('auth');
Route::get('/pizza/create', [PizzaController::class, 'create']) ->name('pizza.create');
Route::get('/pizza/{id}', [PizzaController::class, 'show']) ->name('pizza.show') -> middleware('auth');
Route::post('/pizza', [PizzaController::class, 'store']) ->name('pizza.store');
Route::delete('/pizza/{id}', [PizzaController::class, 'destroy']) ->name('pizza.destroy') -> middleware('auth');
Route::get('/pizzaupdate/{id}', [PizzaController::class, 'update']) ->name('pizza.update') -> middleware('auth');
Route::post('/pizzaupdate', [PizzaController::class, 'updatedata']) ->name('pizza.updatedata') -> middleware('auth');

Auth::routes([
    
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
