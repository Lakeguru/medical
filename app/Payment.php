<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    //
    protected $fillable = [
        'payment_id',
        'patient_name',
        'doctor_name',
        'payment_name',
        'amount',
        'discount',
        'total_amount',
    ];
}
