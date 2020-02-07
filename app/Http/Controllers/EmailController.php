<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Config;
use App\Email;
use Carbon\Carbon;

class EmailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
}
