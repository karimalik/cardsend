<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

        $support = [

        ];
    }
}
