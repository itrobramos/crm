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

     public function create($date)
    {
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


}