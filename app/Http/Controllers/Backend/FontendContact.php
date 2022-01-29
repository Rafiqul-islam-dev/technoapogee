<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class FontendContact extends Controller
{
    public function inqueryodhyyon(Request $request)
    {
        $request->validate([
            'fastName' => 'required|max:50',
            'email' => 'required|email',
            'companyName' => 'required|max:255',
            'message' => 'required|max:255',
        ]);
        $contact = new Contact();
        $contact->fastName = $request->fastName;
        $contact->lastName = $request->lastName;
        $contact->phone = $request->phone;
        $contact->email = $request->email;
        $contact->companyName = $request->companyName;
        $contact->message = $request->message;
        $contact->save();

        Mail::send(new ContactMail($contact));

        return redirect()->back()->with(['message' => 'Your Message has been sent']);;
    }
}
