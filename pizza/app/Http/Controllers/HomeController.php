<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Auth;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;

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
        
        Mail::to('larastudy154@gmail.com')->send(new WelcomeMail());
        return view('email');
    }

    public function store(Request $request){

        if($request->hasfile('image')){
            User::uploadImage($request->image);
            return redirect()->back()->with('msg' , 'User Image Uploaded.');
        }

        return redirect()->back()->with('err' , 'User Image Upload fail.');
    }

    
}
