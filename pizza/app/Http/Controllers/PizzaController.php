<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;

class PizzaController extends Controller
{

    // protect al functions in this
    // public function __construct(){
    //     $this -> middleware('auth');
    // }

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

        $pizza = new pizza();
        
        $pizza->name = request('name');
        $pizza->type = request('type');
        $pizza->price =  request('price');
        $pizza->topping =  request('toppings');

        $pizza->save();
        return redirect('/')->with('msg' ,  'Pizza Created Successfull .');
    }

    // Dlete form
    public function destroy($id){
        $pizza = pizza::findorfail($id);
        $pizza->delete();
        return redirect('/pizza');
    }

}
