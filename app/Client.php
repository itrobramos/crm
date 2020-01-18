<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    public $timestamps = true;
    
    public function Pets()
    {
        return $this->hasMany('App\Pet', 'clientId', 'id');
    }
}
