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
    $pizzas = [
        ['name'=>'veg pizze','type'=>'vege','price' => 1000],
        ['name'=>'chese pizze','type'=>'chese','price' => 2000],
        ['name'=>'meat pizze','type'=>'meat','price' => 3000]
    ];

    return view('pizza' , [
        'pizzas'=> $pizzas,
        'name' => request('name')
        ]);
    
    // return 'pizza';
    // return ['name'=>'veg pizze' ,'base'=>'classic' , 'price' => 3000];
});


Route::get('/pizza/{id}', function ($id) {
// use $id get specific pizza with that i requested
    return view('details' , ['id' => $id]);
});