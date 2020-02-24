<?php

namespace App\Http\Controllers;
use App\Appointment;
use App\Setting;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $Appointments = Appointment::all();

        $List = [];
        $Duracion = Setting::where('name','Duracion_Cita')->first()->value;
        $Tiempo_Entre_Citas = Setting::where('name','Tiempo_Entre_Citas')->first()->value;

        foreach($Appointments as $Appointment){

            $endTime = strtotime("+" . $Duracion + $Tiempo_Entre_Citas . " minutes", strtotime($Appointment->time));

            $List[] = [
                "id" => $Appointment->id,
                "start" => $Appointment->date . " " . $Appointment->time,
                "end" => $Appointment->date . " " . date('H:i', $endTime),
                "color" => Setting::where('name',$Appointment->status)->first()->value,
                "title" => $Appointment->pet->client->first_name . " / " . $Appointment->pet->name
            ];
        }



        $Inicio_Citas = Setting::where('name','Hora_Inicio_Citas')->select('value')->first()->value;
        $Fin_Citas = Setting::where('name','Hora_Fin_Citas')->select('value')->first()->value;
        $Aceptada= Setting::where('name','Aceptada')->select('value')->first()->value;


        $data['appointments'] = $List;
        $data['inicio_citas'] = $Inicio_Citas;
        $data['fin_citas'] = $Fin_Citas;
        $data['color'] = $Aceptada;

        return view('welcome',$data);
    }

    public function indexpedro()
    {
        $Appointments = Appointment::all();

        $List = [];
        $Duracion = Setting::where('name','Duracion_Cita')->first()->value;
        $Tiempo_Entre_Citas = Setting::where('name','Tiempo_Entre_Citas')->first()->value;

        foreach($Appointments as $Appointment){

            $endTime = strtotime("+" . $Duracion + $Tiempo_Entre_Citas . " minutes", strtotime($Appointment->time));

            $List[] = [
                "id" => $Appointment->id,
                "start" => $Appointment->date . " " . $Appointment->time,
                "end" => $Appointment->date . " " . date('H:i', $endTime),
                "color" => Setting::where('name',$Appointment->status)->first()->value,
                "title" => $Appointment->pet->client->first_name . " / " . $Appointment->pet->name
            ];
        }



        $Inicio_Citas = Setting::where('name','Hora_Inicio_Citas')->select('value')->first()->value;
        $Fin_Citas = Setting::where('name','Hora_Fin_Citas')->select('value')->first()->value;
        $Aceptada= Setting::where('name','Aceptada')->select('value')->first()->value;


        $data['appointments'] = $List;
        $data['inicio_citas'] = $Inicio_Citas;
        $data['fin_citas'] = $Fin_Citas;
        $data['color'] = $Aceptada;

        return view('welcomep',$data);
    }

}
