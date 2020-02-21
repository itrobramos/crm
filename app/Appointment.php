<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    public $timestamps = true;
    
    public function Pet()
    {
        return $this->belongsTo('App\Pet', 'petId', 'id');
    }
    public function Finances()
    {
        return $this->hasMany('App\Finance', 'appointmentId', 'id');
    }

}
