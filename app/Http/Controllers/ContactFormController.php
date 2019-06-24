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
        Mail::to('test@test.com')->send(new ContactFormMail($data));

        return redirect()->back()->with('message', 'Thank you for contacting us.');
    }

}
