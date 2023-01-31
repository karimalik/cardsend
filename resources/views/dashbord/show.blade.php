@extends('layouts.main')

@section('title2')
Cpanel | CarSend
@endsection

@section('content-main')
<div class="app-content pt-3 p-md-3 p-lg-4">
    <div class="container-xl">
        <h1 class="app-page-title">Consulation</h1>
        <hr class="mb-4">
        <div class="alert alert-warning" role="alert">
            <i class="fa fa-info"></i>&nbsp; Visualisation des informations du vehicule &quot;<strong
                class="text-danger">{{ $car->marque }}</strong>&quot;.
        </div>
        <div class="row g-4 settings-section">
            <div class="col-12 col-md-12">
                <div class="app-card app-card-settings shadow-sm p-4">
                    <div class="app-card-body">
                        <form class="settings-form" method="POST" action="#" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="marque" class="form-label">Marque</label>
                                <input type="text" class="form-control" id="marque" name="marque"
                                    value="{{ $car->marque }}" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="modele" class="form-label">Modèle</label>
                                <input type="text" class="form-control" id="modele" name="modele"
                                    value="{{ $car->modele }}" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="carosserie" class="form-label">Carrosserie</label>
                                <input type="text" class="form-control" id="carrosserie" name="carrosserie"
                                    value="{{ $car->carrosserie }}" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="killometrage" class="form-label">Killometrage</label>
                                <input type="text" class="form-control" id="killometrage" name="killometrage"
                                    value="{{ $car->killometrage }}" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="annee" class="form-label">Annee</label>
                                <select class="form-select form-control" aria-label="annee" name="annee"
                                    aria-readonly="true" readonly>
                                    <option selected>{{ $car->annee }}</option>
                                    {{-- <option value="2022">2022</option>
                                    <option value="2022">2021</option>
                                    <option value="2022">2020</option>
                                    <option value="2022">2019</option>
                                    <option value="2022">2018</option>
                                    <option value="2022">2017</option>
                                    <option value="2022">2016</option>
                                    <option value="2022">2015</option>
                                    <option value="2022">2014</option>
                                    <option value="2022">2013</option>
                                    <option value="2022">2012</option>
                                    <option value="2022">2011</option>
                                    <option value="2022">2010</option>
                                    <option value="2022">2009</option>
                                    <option value="2022">2008</option>
                                    <option value="2022">2007</option>
                                    <option value="2022">2006</option>
                                    <option value="2022">2005</option>
                                    <option value="2022">2004</option>
                                    <option value="2022">2003</option>
                                    <option value="2022">2002</option>
                                    <option value="2022">2001</option>
                                    <option value="2022">1999</option>
                                    <option value="2022">1998</option>
                                    <option value="2022">1997</option>
                                    <option value="2022">1996</option>
                                    <option value="2022">1995</option>
                                    <option value="2022">1994</option>
                                    <option value="2022">1993</option>
                                    <option value="2022">1992</option>
                                    <option value="2022">1991</option>
                                    <option value="2022">1990</option> --}}
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="moteur" class="form-label">Moteur</label>
                                <input type="text" class="form-control" id="moteur" name="moteur"
                                    value="{{ $car->moteur }}" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="couleur" class="form-label">Couleur</label>
                                <select class="form-select form-control" aria-label="couleur" name="couleur"
                                    aria-readonly="true" readonly>
                                    <option selected>{{ $car->couleur }}</option>
                                    {{-- <option value="Rouge">Rouge</option>
                                    <option value="Vert">Vert</option>
                                    <option value="Bleu">Bleu</option>
                                    <option value="Gris">Gris</option>
                                    <option value="Belge">Belge</option>
                                    <option value="Jaune">Jaune</option>
                                    <option value="Noir">Noir</option>
                                    <option value="Marron">Marron</option>
                                    <option value="Blanche">Blanche</option>
                                    <option value="Autre">Autre</option> --}}
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="etat" class="form-label">Etat</label>
                                <select class="form-select form-control" aria-label="etat" name="etat" readonly>
                                    <option selected>{{ $car->etat }}</option>
                                    {{-- <option value="Neuf">Neuf</option>
                                    <option value="Occasion">Occasion</option>
                                    <option value="Neuf/Occasion">Neuf/Occasion</option>
                                    <option value="Import">Import</option> --}}
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="carburant" class="form-label">Carburant</label>
                                <select class="form-select form-control" aria-label="carburant" name="carburant"
                                    readonly>
                                    <option selected>{{ $car->carburant }}</option>
                                    {{-- <option value="Diesel">Diesel</option>
                                    <option value="Essence">Essence</option> --}}
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="transmission" class="form-label">Transmission</label>
                                <select class="form-select form-control" aria-label="transmission" name="transmission">
                                    <option selected>{{ $car->transmission }}</option>
                                    {{-- <option value="Manuel">Manuel</option>
                                    <option value="Automatique">Automatique</option> --}}
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="nombre_place" class="form-label">Nombre De Place*</label>
                                <input type="text" class="form-control" id="nombre_place" name="nombre_place" placeholder="5"
                                    value="{{ $car->nombre_place }}" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="volant" class="form-label">Volant</label>
                                <select class="form-select form-control" aria-label="volant" name="volant" readonly>
                                    <option selected>{{ $car->volant }}</option>
                                    {{-- <option value="Droite">Droite</option>
                                    <option value="Gauche">Gauche</option> --}}
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="climatissation" class="form-label">Climatisation</label>
                                <select class="form-select form-control" aria-label="climatisation" name="climatisation"
                                    readonly>
                                    <option selected>{{ $car->climatisation }}</option>
                                    {{-- <option value="Oui">Oui</option>
                                    <option value="Non">Non</option> --}}
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="prix" class="form-label">Prix</label>
                                <input type="text" class="form-control" id="prix" name="prix"
                                    value="{{ $car->prix }} XFA" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="negociable" class="form-label">Negociable</label>
                                <select class="form-select form-control" aria-label="negociable" name="negociable"
                                    readonly>
                                    <option selected>{{ $car->negociable }}</option>
                                    {{-- <option value="Oui">Oui</option>
                                    <option value="Non">Non</option> --}}
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="ville" class="form-label">Ville</label>
                                <input type="text" class="form-control" id="ville" name="ville" placeholder="5"
                                    value="{{ $car->ville }}" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="image" class="form-label">Image</label> &nbsp; &nbsp; <br>
                                <img src="{{ asset('Cars/' . $car->image) }}" class="img-thumbnail"
                                    alt="{{ $car->marque }}" width="250px">
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea class="form-control" placeholder="Inserer une description" id="description"
                                    name="description" style="height: 100px" readonly>{{ $car->description }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="status" class="form-label">Status</label>
                                <select class="form-select form-control" aria-label="status" name="status" readonly>
                                    <option selected>{{ $car->status }}</option>
                                    {{-- <option value="Publier" selected>Publier</option>
                                    <option value="En Attente">En Attente</option> --}}
                                </select>
                            </div>
                            <a href="{{ route('cars.index') }}" class="btn btn-secondary">Retour</a>
                        </form>
                    </div>
                    <!--//app-card-body-->

                </div>
                <!--//app-card-->
            </div>
        </div>
        <!--//row-->
    </div>
    <!--//container-fluid-->
</div>
<!--//app-content-->
@endsection

@section('extra-js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
    integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

@if (Session::has('success'))
<script>
    swal("Good", "{!! Session::get('success') !!}", "success",{
            button: "OK"
        })
</script>
@endif

@endsection
