<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usedpin extends Model
{
    //
    protected  $fillable = [
        'user_id',
        'post_id',
        'pin_id',
        'status',
    ];
}
