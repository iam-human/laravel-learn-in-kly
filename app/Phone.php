<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    protected $table = "phone";

    public function users(){
        return $this->belongsTo('App\User');
    }
}


