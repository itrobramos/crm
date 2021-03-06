<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Config;
use App\Email;
use App\Client;
use Carbon\Carbon;
use Mail;

class EmailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }


     public function index()
    {
        $Emails = Email::get();
        $data['emails'] = $Emails;

        return view('office/emails/index',$data);
    }

    public function edit($id)
    {
        $Email = Email::find($id);
        $data['email'] = $Email;

        return view('office/emails/edit',$data);
    }

    public function update(Request $request, $id)
    {
        $Email = Email::find($id);
        $Email->text = $request->detail;
        $Email->save();

        $Emails = Email::get();
        $data['emails'] = $Emails;
        return redirect('emails');
    }

    public function new(){
        $data['clients'] = Client::orderBy("first_name")->get();

        return view('office/emails/new', $data);
    }

    public function send(Request $request){

        $data['email_text'] = $request->detail;
        $email = Client::find($request->clientId)->email;

        Mail::send('email.simple_email', $data,
        function($message) use ($email){
            $message->from(env('MAIL_USERNAME'),'Adrián Hernández');
            $message->to($email, 'Adrián Hernández')->subject('Mensaje enviado desde la plataforma');
        });

        return redirect('emails');

    }
}
