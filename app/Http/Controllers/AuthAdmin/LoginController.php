<?php

namespace App\Http\Controllers\AuthAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Validator;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:admin')->except(['logout','logoutUser']);
    }

    public function showloginForm()
    {
        return view('AdminAuth.login');
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required',
        ]);

        $credential = [
            'email'=> 'request|email',
            'password'=>'request->min:8'
        ];

        if(Auth::guard('admin')->attempt($credential,$request->member)){
            // if login work
            return redirect()->intented(route( 'admin.home'));
        } 
            //if it doesnt work 
            // dd($request->all());
    }


    /**
     * Log the Admin out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logout()
    {
        
        Auth::guard('admin')->logout();
        
        // $this->guard()->logout();

        // $request->session()->invalidate();

        return redirect('/');
    }
}
