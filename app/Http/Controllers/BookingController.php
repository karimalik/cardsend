<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookingController extends Controller
{
    /**
     * Display a listing resource
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = DB::table('cars')
                    ->select('*')
                    ->where('status', '=', 'Publier')
                    ->paginate(6);
        
        return view('pages.booking', compact('cars'));
    }
}
