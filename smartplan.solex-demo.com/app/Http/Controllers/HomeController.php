<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() // applying midlleware for the whole controller which has the functions of the admin panel
    {
        $this->middleware('auth'); // elmfrod route'/home' ywdena 3la home page bs elmiddleware auth by5ly el controller da
        // my2om4 aslun ela lma ykon el ragel 3amel login as admin
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function getUnit($unitNumber){
        
        // $request->input('Subject');
        // $unit = Unit::find($unitNumber);
        // dd($unit);
    }
}
