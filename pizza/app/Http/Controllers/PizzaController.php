<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;

class PizzaController extends Controller
{
    public function index(){

        // get all
        // $pizzas = pizza::all();

        // order
        // $pizzas = pizza::orderby('price','desc')->get();

        // wehre method find
        // $pizzas = pizza::where('type' , 'veg')->get();

        


        return view('pizza' , [
            'pizzas'=> $pizzas,
            ]);
    }

    public function show($id){
        return view('details' , ['id' => $id]);
    }

}
