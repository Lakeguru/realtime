<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    //
    protected $fillable = 
    [   
        'full_name',
        'username',
        'email',
        'password'
    ];
}
