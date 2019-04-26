<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    
    protected $fillable = [
        'diplome', 'universite', 'date_debut','date_fin','description','profile_id','created_at','updated_at',
    ];


     public function profile()
    {
        return $this->belongsTo('App\Profile');
    }
}
