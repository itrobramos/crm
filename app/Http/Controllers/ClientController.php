<?php

namespace App\Http\Controllers;

use App\User;
use App\Client;
use App\Pet;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Config;

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
        $pets = Pet::where("clientId",$id)->get();
        foreach($pets as $pet){
            $pet->avatar= asset($pet->avatar);
        }

        return view('office/clients.edit', compact('client'),compact('pets'));

    }
     
    public function create()
    {
        $pets = null;
        return view('office/clients.create', compact('pets'));
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
            $file->move('uploads/images/', $filename);
            File::delete($Client->avatar);
            $Client->avatar = 'uploads/images/'. $filename;
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
            $file->move('uploads/images/', $filename);
            File::delete($Client->avatar);
            $Client->avatar = 'uploads/images/'. $filename;
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



}