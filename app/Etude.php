<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Etude extends Model
{
    protected $fillable = [
        'etude','created_at','updated_at',
    ];


   public function profiles()
    {
        return $this->hasMany('App\Profile');
    }
}

