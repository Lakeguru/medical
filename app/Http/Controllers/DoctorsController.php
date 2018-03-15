<?php

namespace App\Http\Controllers;

use App\Doctor;
use Carbon\Carbon;
use Brian2694\Toastr\Facades\Toastr;
use Validator;
use Illuminate\Http\Request;

class DoctorsController extends Controller
{
    //
    public function index()
    {
        return view('Doctors.add_doctor');
    }

    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name'=>'required',
            'last_name'=>'required',
            'email'=>'required',
            'gender'=>'required',
            'phone_number'=>'required',
            'address' => 'required',
            'nationality' => 'required',
            'martial_status' => 'required',
            'DOB' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'doctor_id'=>'required'
        ]);

        $doctor = new Doctor();
        $doctor->first_name = $request->first_name;
        $doctor->last_name = $request->last_name;
        $doctor->email = $request->email;
        $doctor->gender = $request->gender;
        $doctor->phone_number = $request->phone_number;
        $doctor->address = $request->address;
        $doctor->nationality = $request->nationality;
        $doctor->martial_status = $request->martial_status;
        $doctor->DOB = $request->DOB;
        $doctor->image = $request->image;
        $doctor->save();
        $doctor= doctor_id;
        // $doctor = $doctor->id;

        dd($request->all());
        
        
        Toastr::success('Doctors  successfully Created.','Success',["positionClass" => "toast-top-right"]);
        return redirect()->route('dashboard')->with('success','Welcome to Lake Hospital Dashboard');

        
    }

}
