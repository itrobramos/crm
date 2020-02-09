<?php

namespace App\Http\Controllers;

use App\Appointment;
use App\User;
use App\Client;
use App\Pet;
use App\Finance;
use App\Notification;
use Illuminate\Support\Facades\File;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        date_default_timezone_set('America/Monterrey');
        $data['clients'] = Client::all()->count();
        $data['pets'] = Pet::all()->count();
        $data['appointments'] = Appointment::where('date', '>=', NOW())->whereIn('status',['Aceptada','Pendiente'])->orderBy('date','asc')->orderBy('time','asc')->get()->take(5);
        //$data['finances'] = Finance::orderBy('date','asc')->get();
        $data['notifications'] = Notification::orderBy('date','asc')->get();


        $Egresos = Finance::where('type','E')->sum('amount'); 
        $Ingresos = Finance::where('type','I')->sum('amount'); 

        $data['ingresos'] =  $Ingresos - $Egresos;

        return view('office/index',$data);
    }



}
