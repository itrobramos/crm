<?php

namespace App\Http\Controllers;

use App\Appointment;
use App\Client;
use App\Finance;
use App\Pet;
use App\User;

use Illuminate\Http\Request;

class FinanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $finances = Finance::orderBy('date','Asc')->get();

        foreach ($finances as $finance){
            if($finance->appointmentId != null && $finance->appointmentId != ""){
                $client = $finance->Appointment->pet->client;
                $finance['client'] = $client->first_name . " " . $client->last_name;
            }
        }


        $data['finances'] = $finances;
        return view('office/finances/index', $data);
    }

    public function show($id)
    {
        //$card = Client::findOrFail($id);
        //$data['card'] = $card;
        //return view('card.show', $data);
        return view('office/finances/show');
    }
        

    public function create(Request $Request)
    {

        if(isset($Request->appointmentid)){
            $data['appointmentId'] = $Request->appointmentid; 
            $data['date'] = Appointment::find($Request->appointmentid)->select('date')->first()->date; 
        }

        $data['appointments'] = Appointment::get();
        return view('office/finances/create', $data);
    }

    public function store(Request $request){
        $Finance = new Finance();

        $Finance->type = $request->type;
        $Finance->appointmentId = $request->appointmentId;
        $Finance->motive = $request->motive;
        $Finance->description = $request->description;

        $Finance->amount = $request->amount;
        $Finance->date = $request->date;


        $Finance->save();
        return redirect('finances')->with('Message','Finances created successfully');
    }

}
