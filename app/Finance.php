<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Finance extends Model
{
    public $timestamps = true;
    
    public function Appointment()
    {
        return $this->belongsTo('App\Appointment', 'appointmentId', 'id');
    }
}
