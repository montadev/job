<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    

    protected $fillable = [
        'contrat','created_at','updated_at',
    ];

     public function profiles()
    {
        return $this->hasMany('App\Profile');
    }
}
