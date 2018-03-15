<?php

namespace App\Http\Controllers;

use App\User;
use Hash;
use Auth;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    //
    public function signup()
    {
        return view('auth.register');
    }

    public function postsignup(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required',
            'password'=>'required|confirmed'
        ]);
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->save();

            Auth::login($user);

            Toastr::success('Account  successfully Created.','Success',["positionClass" => "toast-top-right"]);
            return redirect()->route('dashboard')->with('success','Welcome to Lake Hospital Dashboard');

        // dd($request->all());
    }
}
