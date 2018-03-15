<?php

namespace App\Http\Controllers;

use Auth;
use App\Doctor;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view ('Doctors.add_doctor');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        $this->validate($request,[
            'name'=>'required',
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

            dd($request->all());
        $doctor = new Doctor();
        $doctor->email = $request->email;
        $doctor->gender = $request->gender;
        $doctor->phone_number = $request->phone_number;
        $doctor->address = $request->address;
        $doctor->nationality = $request->nationality;
        $doctor->martial_status = $request->martial_status;
        $doctor->DOB = $request->addreDOBss;
        $doctor->image = $request->addrimageess;
        $doctor->save();
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $doctor = Doctor::find($id);
        $doctor->status = true;
        $doctor->save();
        Toastr::success('Doctor successfully confirmed.','Success',["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $doctor = Doctor::find($id);
        return view('Doctors.index',compact('doctor'));
        // {{ route('slider.store') }}

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        //
        Doctor::find($id)->delete();
        Toastr::success('Doctor successfully deleted.','Success',["positionClass" => "toast-top-right"]);
        return redirect()->back();

    }
}
