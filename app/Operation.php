<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Operation extends Model
{
    //
    public function tasks() 
    {
        return $this->hasMany('App\Task','operation_id');
    }
}