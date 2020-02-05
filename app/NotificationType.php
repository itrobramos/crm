<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NotificationType extends Model
{
    public $timestamps = true;

    public function Notifications()
    {
        return $this->hasMany('App\Notification', 'notificationTypeId', 'id');
    }
}
