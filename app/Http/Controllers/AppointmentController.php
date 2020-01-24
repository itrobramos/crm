<?php

namespace App\Http\Controllers;
use App\Appointment;
use App\User;
use App\Client;
use App\Pet;
use Illuminate\Support\Facades\File;

use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $data['appointments'] = Appointment::all();
        return view('office/appointments/index',$data);
    }

    public function view($id)
    {
        $appointment = Appointment::findOrFail($id);
        return view('office/appointments/view',compact('appointment'));
    }

    public function create(Request $request)
    {
        $date = $request['date'];

        if($request['date'] == null)
            $date = NOW();


        $pets = Pet::orderBy('name')->get();
        return view('office/appointments/create',compact('pets'), compact('date'));
    }

    public function store(Request $request){

        $Appointment = new Appointment();

        $Appointment->date = $request->date;
        $Appointment->time = $request->time;
        $Appointment->petId = $request->petId;
        $Appointment->type = $request->type;
        $Appointment->notes = $request->notes;

        $Appointment->save();
        return redirect('appointments')->with('Message','Appointment created successfully');
    }

    public function getList(){

        
        $Appointments = Appointment::all();
        $List[] = [];

        foreach($Appointments as $Appointment){

            $List = [

                "start" => $Appointment->date,
                "textColor" => "white",
                "color" => "#5E72E4",
                "title" => $Appointment->pet->client->first_name . " / " . $Appointment->pet->name
            ];
        }

        return response($List,200);

    }
}
