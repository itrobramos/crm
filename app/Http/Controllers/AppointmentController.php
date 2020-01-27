<?php

namespace App\Http\Controllers;
use App\Appointment;
use App\User;
use App\Client;
use App\Pet;
use App\Setting;
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
        $Appointments = Appointment::all();
        $List = [];

        foreach($Appointments as $Appointment){

            $List[] = [
                "id" => $Appointment->id,
                "start" => $Appointment->date,
                "color" => Setting::where('name',$Appointment->status)->first()->value,
                "title" => $Appointment->pet->client->first_name . " / " . $Appointment->pet->name
            ];
        }


        $data['appointments'] = $List;
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
        $Appointment->status = "Aceptada";

        $Appointment->save();
        return redirect('appointments')->with('Message','Appointment created successfully');
    }

    public function update(Request $request){

        $Appointment = Appointment::findOrFail($request->id);
        $Appointment->type = $request->type;
        $Appointment->time = $request->time;
        $Appointment->date = $request->date;
        $Appointment->notes = $request->notes;
        $Appointment->status = $request->status;
        

        $Appointment->save();
        return redirect('appointments')->with('Message','Appointment updated successfully');
        return view('appointments');

    }

}