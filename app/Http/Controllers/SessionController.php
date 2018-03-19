<?php

namespace App\Http\Controllers;

use Auth;
use App\Session;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('guest')->except(['index']);

    }
    
    public function login()
    {
        return view('auth.login');
    }
    public function postlogin(Request $request)
    {
        $this->validate($request,[
            'email' => 'required',
            'password' => 'required',
        ]);

        if(!Auth::attempt($request->only(['email','password']), $request->has('remember'))) {
            // dd($request);
            
			return redirect()->back()->with('errors', 'Counld not sign you in with those details!');
		}
        
		return redirect()->route('home');
    }

    public function destroy()
    {
        Auth::logout();
        
		return redirect()->route('signin');
        
    }
    
}
