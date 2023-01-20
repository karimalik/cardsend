<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Artesaos\SEOTools\Facades\SEOTools;
use RealRashid\SweetAlert\Facades\Alert;
use Cviebrock\EloquentSluggable\Services\SlugService;

class CarController extends Controller
{

     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        SEOTools::setTitle('Dashbord | Car');
        SEOTools::setDescription('Vente de voiture en ligne au cameroun');
        SEOTools::opengraph()->setUrl('http://127.0.0.1:8000/');

        $cars = Car::latest()->paginate(8);

        return view('dashbord.auto', compact('cars'))->with(request()->input('page'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('dashbord.addCar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    //   if ($request->hasfile('image')) {
    //     # code...
    //     $file = $request->file('image');
    //     $extension = $file->getClientOriginalExtension();
    //     $filename = time(). '.' .$extension;
    //     $file->move('galerie/cars/', $filename);
    //   }

      $newImageName = time() . '-' . $request->marque . '.' . $request->image->extension();
      $request->image->move(public_path('Cars'), $newImageName);
      $data = [
        'slug' => Str::slug($request->marque),
        'marque' => $request->marque,
        'modele' => $request->modele,
        'prix' => $request->prix,
        'negociable' => $request->negociable,
        // 'type' => $request->type,
        'etat' => $request->etat,
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
        'user_id' => Auth::user()->id,
      ];

      Car::create($data);

      return back()->withSuccess('Your post has been successfully add!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function show(Car $car)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function edit(Car $car)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Car $car)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car)
    {
        //
    }
}
