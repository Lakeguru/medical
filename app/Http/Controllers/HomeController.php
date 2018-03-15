<?php

namespace App\Http\Controllers;

use App\Doctor;
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctorCountall = Doctor::count();
        // $doctorCounttoday = Doctor::count()->dailyAt('13:00');	
        
        return view('home',compact('doctorCountall','doctorCounttoday'));
    }

    public function get()
     {
         
         return view('Dashboard.index',compact('doctorCountall','doctorCounttoday'));
     }
}
