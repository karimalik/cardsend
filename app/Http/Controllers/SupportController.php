<?php

namespace App\Http\Controllers;

use App\Models\Support;
use App\Mail\SupportMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SupportController extends Controller
{
    //
    public  function __construct() {
        $this->middleware('auth');
    }

    public function index() {

        return view('dashbord.support');
    }

    public  function  store(Request $request) {

        $data = [
            'nom' => $request->nom,
            'email' => $request->email,
            'sujet' => $request->sujet,
            'message' => $request->message,
        ];

        $support = Support::create($data);


        if ($support) {
            Mail::to('karimkompissi@gmail.com')->send(new SupportMail($data));
        }
        return back()->withSussess('Votre message a bien ete envoye !');
    }
}
