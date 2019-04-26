<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    

    protected $fillable = [
        'name', 'profile_id','created_at','updated_at',
    ];


    public function profile()
    {
        return $this->belongsTo('App\Profile');
    }
}
