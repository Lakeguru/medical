<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    //
    protected $fillable = ['name','email','gender','phone_number','address','nationality','martial_status','DOB','image','doctor_id'];
}
