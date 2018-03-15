<?php

namespace App\Http\Controllers;

use App\Admin;
use Auth;
use Validator;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index ()
    {
        return view('AdminAuth.home');
    }

    public function getlogin()
    {
        return view('AdminAuth.login');
    }

    public function check()
    {
        return view('components.who');
    }

    
}
