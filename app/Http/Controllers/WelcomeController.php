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
        $Inicio_Citas = Setting::where('name','Hora_Inicio_Citas')->select('value')->first()->value;
        $Fin_Citas = Setting::where('name','Hora_Fin_Citas')->select('value')->first()->value;



        $data['appointments'] = $Appointments;
        $data['inicio_citas'] = $Inicio_Citas;
        $data['fin_citas'] = $Fin_Citas;
        
        return view('welcome',$data);
    }

}
