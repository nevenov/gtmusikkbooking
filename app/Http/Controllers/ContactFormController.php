<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{

    public function store(){

        $data = request()->validate([

            'name' => 'required',
            'email' => 'required',
            'comments' => 'required',


        ]);

        //Sending Email
        Mail::to('stoiannedev@gmail.com')->send(new ContactFormMail($data));

        return redirect()->back()->with('message', 'Takk for at du kontaktet oss. Vi vil svare så snart som mulig.');
    }

}
