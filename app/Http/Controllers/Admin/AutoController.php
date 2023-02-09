<?php

namespace App\Http\Controllers\Admin;

use App\Models\Car;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = Car::paginate(10);

        return view('admin.cars.listCar', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        return view('admin.cars.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newImageName = time() . '-' . $request->marque . '.' . $request->image->extension();
        $request->image->move(public_path('Cars'), $newImageName);
        $data = [
          'slug' => Str::slug($request->marque),
          'marque' => $request->marque,
          'nombre_place' => $request->nombre_place,
          'modele' => $request->modele,
          'prix' => $request->prix,
          'negociable' => $request->negociable,
          'etat' => $request->etat,
          'ville' => $request->ville,
          'carrosserie' => $request->carrosserie,
          'killometrage' => $request->killometrage,
          'annee' => $request->annee,
          'moteur' => $request->moteur,
          'couleur' => $request->couleur,
          'carburant' => $request->carburant,
          'transmission' => $request->transmission,
          'volant' => $request->volant,
          'climatisation' => $request->climatisation,
          'description' => $request->description,
          'image' => $newImageName,
          'status' => $request->status,
          'user_id' => $request->user_id,
        ];

        Car::create($data);

        return redirect()->route('auto.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Car $auto)
    {
        $users = User::all();
        return view('admin.cars.show', compact('auto', 'users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Car $auto)
    {

        $users = User::all();

        return view('admin.cars.edit', compact('auto', 'users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Car $auto)
    {
        $newImageName = time() . '-' . $request->marque . '.' . $request->image->extension();
        $request->image->move(public_path('Cars'), $newImageName);
        $data = [
          'slug' => Str::slug($request->marque),
          'marque' => $request->marque,
          'nombre_place' => $request->nombre_place,
          'modele' => $request->modele,
          'prix' => $request->prix,
          'negociable' => $request->negociable,
          'etat' => $request->etat,
          'ville' => $request->ville,
          'carrosserie' => $request->carrosserie,
          'killometrage' => $request->killometrage,
          'annee' => $request->annee,
          'moteur' => $request->moteur,
          'couleur' => $request->couleur,
          'carburant' => $request->carburant,
          'transmission' => $request->transmission,
          'volant' => $request->volant,
          'climatisation' => $request->climatisation,
          'description' => $request->description,
          'image' => $newImageName,
          'status' => $request->status,
          'user_id' => $request->user_id,
        ];

        $auto->update($data);

        return redirect()->route('auto.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $auto)
    {
        $auto->delete();

        return back();
    }
}
