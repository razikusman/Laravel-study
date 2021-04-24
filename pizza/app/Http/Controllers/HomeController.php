<?php

namespace App\Http\Controllers;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facade\Mail;
use App\Models\User;


use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function email(){
        
        // \Mail::to('raziku98@gmail.com')->send(new WelcomeMail());
        return view('email');
    }

    public function store(Request $request){
        // request()->image->store('images', 'public');

        if($request->hasfile('image')){
            $imagename = $request->image->getClientOriginalName();
            request()->image->storeAs('images', $imagename , 'public');
           auth()->user()->update(['image' =>  $imagename]);
        }

        return redirect()->back();
    }
}
