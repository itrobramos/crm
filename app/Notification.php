<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    public $timestamps = true;

    public function NotificationType()
    {
        return $this->belongsTo('App\NotificationType', 'NotificationTypeId', 'id');
    }
}
