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

        $searchs = DB::table('cars')
                    ->select('*')
                    ->where('ville', '=', $ville)
                    ->where('marque', '=', $marque)
                    ->orWhere(function($query, Request $request){
                        $query->where('modele', '=', $request->modele)
                              ->where('prix', '=', $request->prix);
                    });

        return view('pages.result', compact('searchs'));
    }
}
