<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    

    protected $dates = ['created_at', 'updated_at', 'date_debut','date_fin'];

    
    protected $fillable = [
        'diplome', 'universite', 'date_debut','date_fin','description','profile_id','created_at','updated_at',
    ];


     public function profile()
    {
        return $this->belongsTo('App\Profile');
    }
}
