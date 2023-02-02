<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    /**
     * Display a list of resource
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $ville = $request->ville;
        $marque = $request->marque;
        $modele = $request->modele;
        $prix = $request->prix;

        $cars = DB::table('cars')
                    ->select('*')
                    ->where('ville', '=', $ville)
                    ->get();

       

        $countCars = DB::table('cars')
                    ->where('ville', '=', $ville)
                    ->where('marque', '=', $marque)
                    ->where('modele', '=', $modele)
                    ->where('prix', '=', $prix)
                    ->count();

        return view('pages.result', compact('cars', 'countCars'));
    }
}
