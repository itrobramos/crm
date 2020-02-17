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
        $Duracion = Setting::where('name','Duracion_Cita')->first()->value;

        foreach($Appointments as $Appointment){

            $endTime = strtotime("+" . $Duracion . " minutes", strtotime($Appointment->time));

            $List[] = [
                "id" => $Appointment->id,
                "start" => $Appointment->date . " " . $Appointment->time,
                "end" => $Appointment->date . " " . date('H:i', $endTime),
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

    public function request(Request $request)
    {

        $datetime = strtotime($request->date);
        $date = date('Y-m-d', $datetime);
        $time = date('H:i', $datetime);

        return view('office/appointments/request', compact('date'), compact('time'));
    }

    public function storerequest(Request $request){

        $Client = new Client();
        $Client->email = $request->email;
        $Client->first_name = $request->first_name;
        $Client->last_name = $request->last_name;
        $Client->phone1 = $request->phone;
        $Client->genre = $request->genre;
        $Client->city = $request->city;
        $Client->birth_date = $request->birth_date;
        $Client->address = $request->address;
        $Client->save();

        $Pet = new Pet();
        $Pet->name = $request->pet_name;
        $Pet->birth_date = $request->pet_birth_date;
        $Pet->genre = $request->pet_genre;
        $Pet->breed = $request->breed;
        $Pet->clientId = $Client->id;
        $Pet->save();

        $Appointment = new Appointment();
        $Appointment->date = $request->appointment_date;
        $Appointment->time = $request->appointment_time;
        $Appointment->type = $request->type;
        $Appointment->notes = $request->notes;        
        $Appointment->petId = $Pet->id;
        $Appointment->status = "Pendiente";
        $Appointment->save();

        return redirect('/');
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
