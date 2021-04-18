<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PizzaController extends Controller
{
    public function index(){
        $pizzas = [
            ['name'=>'veg pizze','type'=>'vege','price' => 1000],
            ['name'=>'chese pizze','type'=>'chese','price' => 2000],
            ['name'=>'meat pizze','type'=>'meat','price' => 3000]
        ];
    
        return view('pizza' , [
            'pizzas'=> $pizzas,
            'name' => request('name')
            ]);
    }

    public function show($id){
        return view('details' , ['id' => $id]);
    }

}
