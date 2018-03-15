<?php

namespace App\Http\Controllers\Admin;

use App\Admin;
use Auth;
use Validator;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function getlogin()
    {
        return view('AdminAuth.login');
    }

    public function postlogin(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required',
        ]);

        dd($request->all());
        
        if(!Auth::attempt($request->only(['email','password']), $request->has('remember'))) {

            return redirect()->back()->with('error', 'Could not sign you in with those details!');

        }
        dd($request);
//        return redirect()->route('home');       
    }

    
}
