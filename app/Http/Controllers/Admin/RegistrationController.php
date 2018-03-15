<?php

namespace App\Http\Controllers\Admin;

use Hash;
use App\Admin;
use Auth;
use Validator;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function getsignup()
    {
        return view('AdminAuth.login');
    }


    public function signup(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'=> 'required',
            'gender'=>'required',
            'email' => 'required',
            'phone_number'=>'required',
            'password' => 'required',
        ]);

        $admin = new Admin();
        $admin->name = $request->name;
        $admin->gender = $request->gender;
        $admin->email = $request->email;
        $admin->phone_number = $request->phone_number;
        $admin->password = Hash::make($request->password);

        dd($request->all());

    }
}
