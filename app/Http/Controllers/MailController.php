<?php

namespace App\Http\Controllers;

use App\Appointment;
use App\Client;
use App\Finance;
use App\Pet;
use App\User;
use App\Setting;
use App\Email;

use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;
use Config;
use Carbon\Carbon;
use View;
use Mail;

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

        $data['clients'] = $Clients;

        //Cumpleaños Mascotas
        $Pets = Pet::whereMonth('birth_date', '=',date('m',strtotime($today)))->whereDay('birth_date','=',date('d',strtotime($today)))->get();
        $data['pets'] = $Pets;

        //Citas del día
        $Appointments = Appointment::whereYear('date', '=', date('Y',strtotime($today)))
                                    ->whereMonth('date','=',date('m',strtotime($today)))
                                    ->whereDay('date','=',date('d',strtotime($today)))->get();

        $data['appointments'] = $Appointments;

        // return view('email.daily_resume',$data);

        Mail::send('email.daily_resume', $data,
        function($message){
            $email = 'roberto.ramosalv@gmail.com'; //$Pet->client->email;
            $message->from(env('MAIL_USERNAME'),'Adrián Hernández');
            $message->to($email, 'Adrián Hernández')->subject('Resumen del día');
        });

    }

    public function birthdays(){
        date_default_timezone_set('America/Monterrey');

        $today = date('Y-m-d');
        $data['today'] = $today;


        //Cumpleaños Mascota
        $TextEmail = Email::where('name', 'Cumpleaños Mascota')->first();

        $Pets = Pet::whereMonth('birth_date', '=',date('m',strtotime($today)))
                   ->whereDay('birth_date','=',date('d',strtotime($today)))->get();

        $data['email_text'] = $TextEmail->text;


        foreach($Pets as $Pet){

            Mail::send('email.birthday', $data,
            function($message){
              $email = "roberto.ramosalv@gmail.com"; //$Pet->client->email;
              $name = "test";//$Pet->client->first_name . " " . $Pet->client->last_name;
              $message->from(env('MAIL_USERNAME'),'Adrián Hernández');
              $message->to($email, $name )->subject('Feliz aniversario');
            });
        }


        //Cumpleaños Clientes
        $TextEmail = Email::where('name', 'Cumpleaños Cliente')->first();

        $data['email_text'] = $TextEmail->text;

        $Clients = Client::whereMonth('birth_date', '=',date('m',strtotime($today)))->whereDay('birth_date','=',date('d',strtotime($today)))->get();

        foreach($Clients as $Client){


            Mail::send('email.birthday', $data,
            function($message){
                $email = "roberto.ramosalv@gmail.com"; //$Client->email;
                $name = $Client->first_name . " " . $Client->last_name;
                $message->from(env('MAIL_USERNAME'),'Adrián Hernández');
              $message->to($email, $name )->subject('Feliz aniversario');
            });

        }
    }
}
