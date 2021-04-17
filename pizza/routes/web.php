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
    return view('welcome');
});

Route::get('/pizza', function () {

    //assume data come from db
    // return view('pizza' , ['name'=>'veg pizze' ,'base'=>'classic' , 'price' => 3000]);

    //above ddata in another way
    $pizza = [
        'name'=>'veg pizze',
        'base'=>'classic',
        'price' => 3000
    ];
    return view('pizza', $pizza);
    
    // return 'pizza';
    // return ['name'=>'veg pizze' ,'base'=>'classic' , 'price' => 3000];
});
