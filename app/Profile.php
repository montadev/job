<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    
    protected $fillable = [
        'cv', 'post', 'competence','adress','tel','user_id','contract_id','created_at','updated_at','etude_id',
    ];


    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
    public function etude()
    {
        return $this->belongsTo('App\Etude');
    }

     public function formations()
    {
        return $this->hasMany('App\Formation');
    }

    public function experiences()
    {
        return $this->hasMany('App\Experience');
    }

    public function categories()
    {
        return $this->hasMany('App\Category');
    }


    public function contract()
    {
        return $this->belongsTo('App\Contract');
    }
}
