<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Documents extends Model
{

    public function Lostfound()
    {
        return $this->belongsToMany('App\Lostfound');
    }
    //
}
