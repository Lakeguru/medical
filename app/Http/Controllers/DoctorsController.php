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
    public function __construct()
    {
        $this->middleware('auth')->except(['index']);

    }
    
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
        ]);

        $filenamewithExt = $request->file('image')->getClientOriginalName();
        $filename = pathinfo($filenamewithExt, PATHINFO_FILENAME);
        // RETURN $filename;
        $extension = $request->file('image')->getClientOriginalExtension();
        //create new filename

        $filenametostore = $filename .'_'.time().'.'.$extension;
        //upload image

        $path= $request->file('image')->storeAs('public/doctor',$filenametostore);


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
        // $doctor->image = $request->image;
        $doctor->image = '/images'.$request->$filename;
        $doctor->save();
        
        Toastr::success('Doctors  successfully Created.','Success',["positionClass" => "toast-top-right"]);
        return redirect()->route('dashboard')->with('success','Welcome to Lake Hospital Dashboard');
        
    }

    public function all_doctor()
    {
        $doctors =Doctor::latest()->get();
        return view('Doctors.all_doctor',compact('doctors'));
    }

    public function image()
    {

    }

}
