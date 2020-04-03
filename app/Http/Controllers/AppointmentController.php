<?php

namespace App\Http\Controllers;
use App\Appointment;
use App\User;
use App\Client;
use App\Pet;
use App\Setting;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Redirect;
use Mail;

use Illuminate\Http\Request;

class AppointmentController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['request', 'storerequest', 'deny','accept']]);
    }

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

        $Client = Client::where('email',$request->email)->first();

        if($Client == null){
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
        }

        $Pet = Pet::where('clientId', $Client->id)->where('name',$request->pet_name)->first();

        if($Pet == null){
            $Pet = new Pet();
            $Pet->name = $request->pet_name;
            $Pet->birth_date = $request->pet_birth_date;
            $Pet->genre = $request->pet_genre;
            $Pet->breed = $request->breed;
            $Pet->clientId = $Client->id;
            $Pet->save();
        }

        $Appointment = new Appointment();
        $Appointment->date = $request->appointment_date;
        $Appointment->time = $request->appointment_time;
        $Appointment->type = $request->type;
        $Appointment->notes = $request->notes;
        $Appointment->petId = $Pet->id;
        $Appointment->status = "Pendiente";
        $Appointment->save();


        $data['client_name'] = $Client->first_name . " " . $Client->last_name;
        $data['client_email'] = $Client->email;
        $data['client_phone'] = $Client->phone1;

        $data['pet_name'] = $Pet->name;
        $data['pet_breed'] = $Pet->breed;
        $data['pet_genre'] = $Pet->genre;

        $data['appointment_date'] = $Appointment->date;
        $data['appointment_time'] = $Appointment->time;
        $data['appointment_type'] = $Appointment->type;

        $data['appointment_city'] = $Client->city;
        $data['appointment_address'] = $Client->address;
        $data['appointment_notes'] = $Appointment->notes;
        $data['appointment_id'] = $Appointment->id;



        // Mail::send('email.appointment_email', $data,
        // function($message){
        //   $Email = Setting::where('name','Email_Notificaciones')->first()->value;
        //   $name = env('APP_NAME');//$Pet->client->first_name . " " . $Pet->client->last_name;
        //   $message->from(env('MAIL_USERNAME'),env('APP_NAME'));
        //   $message->to($Email, $name )->subject('Solicitud de cita');
        // });

        // return view('email/appointment_email', $data);
        return redirect('/');
    }



    public function store(Request $request){


        $Duracion = Setting::where('name','Duracion_Cita')->first()->value;
        $endTime = strtotime("-" . $Duracion . " minutes", strtotime($request->time));
        $endTime = date('H:i', $endTime);


        $ExistingAppointment = Appointment::where('date',$request->date)
                            ->where('time','<=',$request->time)
                            ->where('time','>=',$endTime )->first();



        if($ExistingAppointment != null){
            $Message = 'test';
            return Redirect::back()->withErrors('No fue posible crear la cita, revise su disponibilidad.');
            return redirect('appointments/create');

        }else{
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

    public function accept($id){
        $Appointment = Appointment::findOrFail($id);
        $Appointment->status = 'Aceptada';
        $Appointment->save();
        return redirect('/appointments');
    }

    public function deny($id){
        $Appointment = Appointment::findOrFail($id);
        $Appointment->status = 'Cancelada';
        $Appointment->save();
        return redirect('/appointments');
    }


}
