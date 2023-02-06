<?php

namespace App\Http\Controllers;

use App\Models\Car;
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

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */

     public function show(Car $car)
     {
        return view('pages.details', compact('car'));
     }
}
