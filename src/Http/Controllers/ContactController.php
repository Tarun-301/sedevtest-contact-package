<?php

namespace Sedevtest\Contact\Http\Controllers;

use Illuminate\Http\Request;

//below class import for extends Contoller class
use App\Http\Controllers\Controller;
use Sedevtest\Contact\Models\Contact;

//use below class for mail
use Illuminate\Support\Facades\Mail;

//below class import for extends ContactMailable class
use Sedevtest\Contact\Mail\ContactMailable;

class ContactController extends Controller
{
    public function index()
    {
        //here package name::view page name
        return view('contact::contact');
    }
    
    public function send(Request $request)
    {
        // Mail::to('tarun301@gmail.com')->send(new ContactMailable($request->message, $request->name));

        //mail by config setting in contact.php
        //Mail::to(config('contact.send_email_to'))->send(new ContactMailable($request->message, $request->name));
        Contact::create($request->all());
        return redirect(route('contact.index'));
    }
}
