<?php

namespace App\Http\Controllers;
use App\Setting;
use Illuminate\Support\Facades\File;

use Illuminate\Http\Request;

class SettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $Settings = Setting::all();
        $data['settings'] = $Settings;
        return view('office/settings/index',$data);
    }

    public function update(Request $request)
    {
        // $var = "Aceptada";
        // dd($request->$var);

        $Settings = Setting::all();

        foreach ($Settings as $Setting){
            $Update = Setting::where('name',$Setting->name)->first();
            $name = $Update->name;
            $Update->value = $request->$name;
            $Update->save();
        }
        
        return redirect('settings')->with('Message','Settings updated successfully');
    }

}
