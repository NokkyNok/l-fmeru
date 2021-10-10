<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lostfound extends Model
{

    public function User()
    {
        return $this->belongsTo('App\User');
    }

    public function Document()
    {
        return $this->hasMany('App\Documents');
    }
    //
}
