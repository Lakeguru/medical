<?php

namespace App\Http\Controllers;

use App\Doctor;
use App\Patient;
use App\Payment;
use App\Contact;
use App\Department;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function get()
     {
        $doctorCountall = Doctor::count();
        // $doctorCounttoday = Doctor::count()->dailyAt('13:00');	
         
         return view('Dashboard.index',compact('doctorCountall'));
     }
    // public function index()
    // {
    //         $doctorCounttoday = Doctor::count()->dailyAt('13:00');	
    // //     // $patientCount = Item::count();
    // //     $departmentCount = Department::count();
    // //     $patientCount = Patient::where('status',false)->get();
    // //     $paymentCount = Payment::where('status',false)->get();
    // //     $contactCount = Contact::count();
    //     return view('admin.dashboard',compact('doctorCountall'));
    // }

   
}
