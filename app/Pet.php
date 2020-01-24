<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    public $timestamps = true;
    
    public function Client()
    {
        return $this->belongsTo('App\Client', 'clientId', 'id');
    }

    public function Appointments()
    {
        return $this->hasMany('App\Appointment', 'id', 'petId');
    }
}
