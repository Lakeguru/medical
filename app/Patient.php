<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    //
    protected $fillable =
        [
            'first_name',
            'last_name',
            'address',
            'state',
            'nationality',
            'gender',
            'DOB',
            'martial_status',
            'phone_number',
            'email',
            'description',
            'image'
        ];

}
