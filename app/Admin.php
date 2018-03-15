<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $guard = 'admin';
     
    protected $fillable = ['name','email','gender','phone_number','password'];

}
