<?php

namespace App\Http\Controllers;

use App\Appointment;
use App\User;
use App\Client;
use App\Pet;
use App\Finance;
use App\Notification;
use Illuminate\Support\Facades\File;
use DB;
use Auth;
use Session;
use Redirect;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }


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

        ////Inicio reporte de clientes por mes

         //Year
         $YearGraph = DB::select("select year(a.date) year, month(a.date) month, count(*) total
                                  from clients c INNER JOIN pets p ON c.id = p.clientid
                                                 INNER JOIN appointments a ON a.petid = p.id
                                  WHERE a.status = 'Finalizada'
                                  Group by year(a.date), month(a.date)");
         $data['month_clients'] = $YearGraph;

         //Fin reporte de clientes por mes

        return view('office/index',$data);
    }


    function logout(){
        Auth::logout();
        Session::flush();
        return Redirect::to('/');
    }


}
