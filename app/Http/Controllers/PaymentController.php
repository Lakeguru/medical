<?php

namespace App\Http\Controllers;

use App\Payment;
use Auht;
use App\Doctor;
use App\Patient;

use Validator;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {   
        $patients =Patient::latest()->get();
        $doctors =Doctor::latest()->get();
        return view('Payments.add_payment',compact('patients','doctors'));
    }

    public function add_payment(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'patient_name' => 'required',
            'doctor_name' => 'required',
            'payment_name' => 'required',
            'amount' => 'required',
            'discount' => 'required',
            'total_amount' => 'required',
        ]);

        dd($request->all());
    }
}
