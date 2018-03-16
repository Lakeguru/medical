<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Auth;
use App\Patient;
use Validator;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    //
    public function index()
    {
        return view('Patients.add_patient');
    }

    public function all_patient()
    {
        $patients =Patient::latest()->get();
        return view ('Patients.all_patient',compact('patients'));
    }

    public function status($id){
        $patients = Patient::find($id);
        $patients->status = true;
        $patients->save();
        Toastr::success('Patient successfully confirmed.','Success',["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }
    public function destory($id){
        $patients = Patient::find($id)->delete();
        Toastr::success('Patient successfully deleted.','Success',["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }


    public function add_patient(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'address' => 'required',
            'nationality' => 'required',
            'state' => 'required',
            'gender' => 'required',
            'martial_status' => 'required',
            'DOB' => 'required',
            'phone_number' => 'required',
            'email' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $filenamewithExt = $request->file('image')->getClientOriginalName();
        $filename = pathinfo($filenamewithExt, PATHINFO_FILENAME);
        // RETURN $filename;
        $extension = $request->file('image')->getClientOriginalExtension();
        //create new filename

        $filenametostore = $filename .'_'.time().'.'.$extension;
        //upload image

        $path= $request->file('image')->storeAs('public/patient',$filenametostore);
        $patient = new Patient();
        $patient->first_name = $request->first_name;
        $patient->last_name = $request->last_name;
        $patient->address = $request->address;
        $patient->nationality = $request->nationality;
        $patient->state = $request->state;
        $patient->gender = $request->gender;
        $patient->martial_status = $request->martial_status;
        $patient->DOB = $request->DOB;
        $patient->phone_number = $request->phone_number;
        $patient->email = $request->email;
        $patient->description = $request->description;
        // $patient->image= $request->image;
        $patient->image = '/images'.$request->$filename;
        $patient->status = false;
        $patient->patient_id = Auth::user()->id;
        $patient->save();
        
        Toastr::success('Patient  successfully Created.','Success',["positionClass" => "toast-top-right"]);
        return redirect()->route('dashboard')->with('success','Welcome to Lake Hospital Dashboard');
    
    }
}
