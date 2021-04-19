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
        $pizza = pizza::findorfail($id);
        return view('Pizza.show' , ['pizza' => $pizza]);
    }

    // create form
    public function create(){
        return view('Pizza.create');
    }

    // post
    public function store(){

        error_log(request('name'));
        error_log(request('type'));
        error_log(request('price'));

        return redirect('/');
    }

}
