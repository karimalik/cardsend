<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('pages.contact');
    }

    public function sendMessage(Request $request)
    {
        $message = [
            'nom' => $request->nom,
            'email' => $request->email,
            'sujet' => $request->sujet,
            'message' => $request->message,
        ];

        $messageSend = Contact::create($message);

        if ($messageSend) {
            
            Mail::to('karimkompissi@gmail.com')->send(new ContactMail($message));
        }

        return back()->withSuccess('Votre message a bien ete envoye !');
    }
}
