<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pin extends Model
{
    //

    protected $fillable = [
        'random',
    ];

    public function user()
    {
        return $this->hasMany('App\User');

    }
    

    public function post()
    {
        return $this->hasMany('App\Post');

    }

}
