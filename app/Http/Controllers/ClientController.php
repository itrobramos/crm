<?php

namespace App\Http\Controllers;

use App\User;
use App\Client;

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
        $data['clients'] = Client::all();
        return view('office/clients/index',$data);
    }

    public function edit($id)
    {
        $client = Client::findOrFail($id);
        //dd($data['client']->first_name);
        return view('office/clients.edit', compact('client'));

    }
     
    public function create()
    {
        return view('office/clients.create');
    }

  
}