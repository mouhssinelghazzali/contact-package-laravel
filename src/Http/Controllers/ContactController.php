<?php

namespace Elghazzali\Contact\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Elghazzali\Contact\Models\Contact;
use Illuminate\Support\Facades\Mail;
use Elghazzali\Contact\Mail\ContactMailable;

class ContactController extends Controller
{
    public function index()
    {
         return view('contact::contact');
    }

    public function send(Request $request)
    {
       Mail::to(config('contact.send_mail_to'))->send(new ContactMailable($request->message,$request->name));
        Contact::create($request->all());
        return redirect(route('contact'));
    }
}
