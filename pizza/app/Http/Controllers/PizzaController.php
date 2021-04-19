<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;

class PizzaController extends Controller
{
    // show all
    public function index(){

        // get all
        // $pizzas = pizza::all();

        // order
        // $pizzas = pizza::orderby('price','desc')->get();

        // wehre method find
        // $pizzas = pizza::where('type' , 'veg')->get();

        //find the last add
        $pizzas = pizza::latest()->get();

        return view('Pizza.index' , [
            'pizzas'=> $pizzas,
            ]);
    }

    // show with id
    public function show($id){
        return view('Pizza.show' , ['id' => $id]);
    }

    // create
    public function create(){
        return view('Pizza.create');
    }

}
