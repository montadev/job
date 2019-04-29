<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Choose extends Model
{
    
    protected $fillable = [
        'contrat','name','created_at','updated_at',
    ];


     public function profiles()
    {
        return $this->belongsToMany('App\Profile');
    }
}
