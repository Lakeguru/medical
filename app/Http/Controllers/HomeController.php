<?php

namespace App\Http\Controllers;

use App\Patient;
use App\Doctor;
use App\Payment;
use App\Department;
use Carbon\Carbon;
use DB;
use Illuminate\Http\Request;
use Auth;

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
        $patientcount = Patient::count();
        $patienttoday= Patient::whereRaw('date(created_at) = ?', [Carbon::today()])->count();
        $paymentcount = Payment::count();
        $departmentcount = Department::count();
        
        return view('home',compact('doctorCountall','patientcount','paymentcount','departmentcount','patienttoday','chart'));
    }

    public function get()
     {
         
         return view('Dashboard.index',compact('doctorCountall','doctorCounttoday'));
     }

     

     public function destroy()
     {
         Auth::logout();
        return redirect()->route('index')->with('success','Thanks for using Lake Hospital');
         
     }
}
