<?php

namespace App\Http\Controllers;

use App\Mail\WelcomeMail;
use Illuminate\Support\Facade\Mail;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Auth;

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

        if($request->hasfile('image')){
            User::uploadImage($request->image);
            $request->session()->flash('msg' , 'User Image Uploaded.');
            return redirect()->back();
        }

        $request->session()->flash('err' , 'User Image Upload fail.');
        return redirect()->back();
    }

    
}
