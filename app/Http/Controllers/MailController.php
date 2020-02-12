<?php

namespace App\Http\Controllers;

use App\Appointment;
use App\Client;
use App\Finance;
use App\Pet;
use App\User;
use App\Setting;

use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Config;
use Carbon\Carbon;
use View;

class MailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dailyResume()
    {
        date_default_timezone_set('America/Monterrey');

        $today = date('Y-m-d');
        $data['today'] = $today;

        //Cumpleaños Clientes
        $Clients = Client::whereMonth('birth_date', '=',date('m',strtotime($today)))->whereDay('birth_date','=',date('d',strtotime($today)))->get();

        foreach($Clients as $Client){
            $diff = $today->diff($Client->birth_date);
            $Client['Aniversario'] = $diff;
        }

        $data['clients'] = $Clients;

        //Cumpleaños Mascotas
        $Pets = Pet::whereMonth('birth_date', '=',date('m',strtotime($today)))->whereDay('birth_date','=',date('d',strtotime($today)))->get();
        $data['pets'] = $Pets;

        //Citas del día
        $Appointments = Appointment::whereYear('date', '=', date('Y',strtotime($today)))
                                    ->whereMonth('date','=',date('m',strtotime($today)))
                                    ->whereDay('date','=',date('d',strtotime($today)))->get();

        $data['appointments'] = $Appointments;


        // $view = View::make('email/dailyResume', [
        //     'clients' => $Clients,
        //     'today'   => $today,
        //     'appointments' => $Appointments
        // ]);

        // $html = $view->render();
        //dd($html);

        return view('email/dailyResume',$data);
    }

}
