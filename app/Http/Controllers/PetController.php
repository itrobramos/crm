<?php

namespace App\Http\Controllers;

use App\Client;
use App\User;
use App\Pet;
use Illuminate\Support\Facades\File;

use Illuminate\Http\Request;

class PetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['pets'] = Pet::all();
        return view('office/pets/index',$data);
    }

    public function edit($id)
    {
        $pet = Pet::findOrFail($id);
        $data['pet'] = $pet;
        $data['clients'] = Client::orderBy("first_name")->get();
        return view('office/pets.edit', $data);

    }
     
    public function create()
    {
        $data['clients'] = Client::orderBy("first_name")->get();
        return view('office/pets.create', $data);
    }

    public function store(Request $request){
        $Pet = new Pet();

        $Pet->name = $request->name;
        $Pet->breed = $request->breed;
        $Pet->birth_date = $request->birth_date;
        $Pet->genre = $request->genre;
        $Pet->clientId = $request->clientId;

        if($request->hasfile('avatar')) 
        { 
            $file = $request->file('avatar');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename =time().'.'.$extension;
            $file->move('uploads/images/', $filename);
            File::delete($Pet->avatar);
            $Pet->avatar = 'uploads/images/'. $filename;
        }

        $Pet->save();
        return redirect('pets')->with('Message','Pet created successfully');
    }

    public function update(Request $request, $id)
    {
        $Pet = Pet::findOrFail($id);
        $Pet->name = $request->name;
        $Pet->breed = $request->breed;
        $Pet->birth_date = $request->birth_date;
        $Pet->genre = $request->genre;
        $Pet->clientId = $request->clientId;

        if($request->hasfile('avatar')) 
        { 
            $file = $request->file('avatar');
            $extension = $file->getPetOriginalExtension(); // getting image extension
            $filename =time().'.'.$extension;
            $file->move('uploads/images/', $filename);
            File::delete($Pet->avatar);
            $Pet->avatar = 'uploads/images/'. $filename;
        }

        $Pet->save();
        return redirect('pets')->with('Message','Pet created successfully');
    }

    public function destroy($id)
    {
        Pet::destroy($id);
        return redirect('pets')->with('Message','Pet deleted successfully');
    }



}