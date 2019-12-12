<?php

namespace App\Http\Controllers;

use App\User;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$data[''] = User::orderBy('name','Asc')->get();
        return view('office/clients/index',/*$data*/);
    }

    public function show($id)
    {
        //$card = Client::findOrFail($id);
        //$data['card'] = $card;
        //return view('card.show', $data);
        return view('office/clients/show');
    }
        

  
}
