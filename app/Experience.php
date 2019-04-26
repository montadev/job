<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    
    protected $fillable = [
        'entreprise', 'position', 'date_debut','date_fin','description','profile_id','created_at','updated_at',
    ];



    public function profile()
    {
        return $this->belongsTo('App\Profile');
    }
}
