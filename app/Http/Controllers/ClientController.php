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

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth', ['except' => ['request', 'storerequest', 'getInfo']]);

    }


     public function index()
    {
        date_default_timezone_set('America/Monterrey');

        $Clients = Client::all();
        $Inactividad = Setting::where('name','Cliente_Inactivo')->first()->value;

        foreach($Clients as $Client){

            $Client["Ingresos"] = 0;
            $Client["Egresos"] = 0;

            $pets = Pet::where("clientId",$Client->id)->with("Appointments")->get();

            $petIds = [];

            foreach($pets as $pet){
                $petIds[] = ["Id" => $pet->id];

                $Appointments = Appointment::where('petId',$pet->id)->get();

                foreach($Appointments as $Appointment){
                    if($Appointment->finances != null){
                        foreach($Appointment->finances as $finance )
                            if($finance->type = "E")
                                $Client["Ingresos"] = $Client["Ingresos"] + $finance->amount;
                            else
                                $Client["Egresos"] = $Client["Egresos"] + $finance->amount;
                        }
                }
            }

            $data = Appointment::whereIn('petId', $petIds)
                    ->where('date','<=',NOW())
                    ->orderBy('date','desc')
                    ->first();


            if($data != null){
                $now = time(); // or your date as well
                $datediff = $now - strtotime($data->date);
                $datediff =  round($datediff / (60 * 60 * 24));
                $Client["lastService"] = Carbon::now()->subDays($datediff)->diffForHumans();
                $Client["lastServiceDays"] = $datediff;
            }
            else
                $Client["lastService"] = "Inactivo";


            $Client["Total"] = $Client["Ingresos"] - $Client["Egresos"];
        }


        $data['clients'] = $Clients;
        $data['Inactividad'] = $Inactividad;
        return view('office/clients/index',$data);
    }

    public function edit($id)
    {
        $client = Client::findOrFail($id);
        $pets = Pet::where("clientId",$id)->with("Appointments")->get();
        $appointments = [];

        $data['client'] =$client;
        $data['pets'] = $pets;

        foreach($pets as $pet){

        $futureAppointments = Appointment::where('petId', $pet->id)->orderBy('date','desc')->get();
            foreach($futureAppointments as $app){
                $appointments[] = [
                    "date" => $app->date,
                    "time" => $app->time,
                    "pet" => $pet->name,
                    "status" => $app->status,
                    "notes" => $app->notes,
                    "comments" => $app->clientComments
                ];
            }
        }


        $data['appointments'] = $appointments;

        return view('office/clients.edit', $data);
    }

    public function create()
    {
        $pets = null;
        $appointments = null;
        return view('office/clients.create', compact('pets'), compact('appointments'));
    }

    public function store(Request $request){
        $Client = new Client();

        $Client->first_name = $request->first_name;
        $Client->last_name = $request->last_name;
        $Client->birth_date = $request->birth_date;
        $Client->genre = $request->genre;

        $Client->email = $request->email;
        $Client->phone2 = $request->phone2;

        $Client->address = $request->address;
        $Client->city = $request->city;
        $Client->notes = $request->notes;

        if($request->hasfile('avatar'))
        {
            $file = $request->file('avatar');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename =time().'.'.$extension;
            $file->move('public/uploads/images/', $filename);
            File::delete($Client->avatar);
            $Client->avatar = 'public/uploads/images/'. $filename;
        }

        $Client->save();
        return redirect('clients')->with('Message','Card created successfully');
    }

    public function update(Request $request, $id)
    {
        $Client = Client::findOrFail($id);
        $Client->first_name = $request->first_name;
        $Client->last_name = $request->last_name;
        $Client->birth_date = $request->birth_date;
        $Client->genre = $request->genre;

        $Client->email = $request->email;
        $Client->phone2 = $request->phone2;

        $Client->address = $request->address;
        $Client->city = $request->city;
        $Client->notes = $request->notes;


        if($request->hasfile('avatar'))
        {
            $file = $request->file('avatar');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename =time().'.'.$extension;
            $file->move('public/uploads/images/', $filename);
            File::delete($Client->avatar);
            $Client->avatar = 'public/uploads/images/'. $filename;
        }

        $Client->save();
        return redirect('clients')->with('Message','Card created successfully');
        return view('clients');
    }

    public function destroy($id)
    {
        Client::destroy($id);
        return redirect('clients')->with('Message','Card deleted successfully');
    }


    public function  getInfo(Request $request){

        $email = ($request->email);

        $response = collect([
            "statusCode" => 0,
            "statusMessage" => "OK",
            "resultset" => ""
        ]);


        $client = Client::where('email',$email)->first();

        if($client == null){
            $response['statusCode'] = 0;
        }
        else{
            $response['statusCode'] = 1;
            $data = ["email"=>$email,
                     "first_name"=>$client->first_name,
                     "last_name"=>$client->last_name,
                     "phone"=>$client->phone1,
                     "genre"=>$client->genre,
                     "birthdate"=>$client->birth_date,
                     "pet_name"=>$client->pets->first()->name,
                     "pet_breed"=>$client->pets->first()->breed,
                     "pet_genre"=>$client->pets->first()->genre,
                     "pet_birthdate"=>$client->pets->first()->birth_date,
                     "city"=>$client->city,
                     "address"=>$client->address
                    ];

            $response['resultset'] = $data;
        }

        return response()->json($response, 200);
    }

}
