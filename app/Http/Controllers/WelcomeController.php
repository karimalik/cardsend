<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller
{

    /**
     * Display a listing of resource
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = DB::table('cars')
                    ->select('*')
                    ->where('status', '=', 'Publier')
                    ->paginate(6);

        return view('welcome', compact('cars'));
    }
}
