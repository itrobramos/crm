<?php

namespace App\Http\Controllers;

use App\Notification;
use App\NotificationType;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Config;
use Carbon\Carbon;

class NotificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Notifications = NotificationType::all();

        $data['notifications'] = $Notifications;
        return view('office/notifications/index',$data);
    }

    public function destroy($id)
    {
        Notification::destroy($id);
        return redirect('notifications')->with('Message','notification deleted successfully');
    }

}
