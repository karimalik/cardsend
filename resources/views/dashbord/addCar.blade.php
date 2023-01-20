@extends('layouts.main')

@section('title2')
Cpanel | CarSend
@endsection

@section('content-main')
<div class="app-content pt-3 p-md-3 p-lg-4">
    <div class="container-xl">
        <h1 class="app-page-title">Ajout D'Une Voiture</h1>
        <hr class="mb-4">
        <div class="alert alert-info" role="alert">
            <i class="fa fa-info"></i>&nbsp; Tous les champs avec &quot;<strong class="text-danger">*</strong>&quot;
            sont obligatoire
        </div>
        <div class="row g-4 settings-section">
            <div class="col-12 col-md-12">
                <div class="app-card app-card-settings shadow-sm p-4">
                    <div class="app-card-body">
                        <form class="settings-form" method="POST" action="{{ route('cars.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="marque" class="form-label">Marque*</label>
                                <input type="text" class="form-control" id="marque" name="marque" value=""
                                    placeholder="Toyota" required>
                            </div>
                            <div class="mb-3">
                                <label for="modele" class="form-label">Modèle*</label>
                                <input type="text" class="form-control" id="modele" placeholder="Allex" name="modele"
                                    value="" required>
                            </div>
                            <div class="mb-3">
                                <label for="carosserie" class="form-label">Carrosserie*</label>
                                <input type="text" class="form-control" id="carrosserie" name="carrosserie"
                                    placeholder="Berline" value="">
                            </div>
                            <div class="mb-3">
                                <label for="killometrage" class="form-label">Killometrage</label>
                                <input type="text" class="form-control" id="killometrage" name="killometrage"
                                    placeholder="" value="">
                            </div>
                            <div class="mb-3">
                                <label for="annee" class="form-label">Annee</label>
                                <select class="form-select form-control" aria-label="annee" name="annee">
                                    <option selected>Choix...</option>
                                    <option value="2022">2022</option>
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
                                    <option value="2022">1990</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="moteur" class="form-label">Moteur*</label>
                                <input type="text" class="form-control" id="moteur" name="moteur" placeholder=""
                                    value="" required>
                            </div>
                            <div class="mb-3">
                                <label for="couleur" class="form-label">Couleur</label>
                                <select class="form-select form-control" aria-label="couleur" name="couleur">
                                    <option selected>Choix...</option>
                                    <option value="Rouge">Rouge</option>
                                    <option value="Vert">Vert</option>
                                    <option value="Bleu">Bleu</option>
                                    <option value="Gris">Gris</option>
                                    <option value="Belge">Belge</option>
                                    <option value="Jaune">Jaune</option>
                                    <option value="Noir">Noir</option>
                                    <option value="Marron">Marron</option>
                                    <option value="Blanche">Blanche</option>
                                    <option value="Autre">Autre</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="etat" class="form-label">Etat*</label>
                                <select class="form-select form-control" aria-label="etat" name="etat" required>
                                    <option selected>Choix...</option>
                                    <option value="Neuf">Neuf</option>
                                    <option value="Occasion">Occasion</option>
                                    <option value="Neuf/Occasion">Neuf/Occasion</option>
                                    <option value="Import">Import</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="carburant" class="form-label">Carburant*</label>
                                <select class="form-select form-control" aria-label="carburant" name="carburant"
                                    required>
                                    <option selected>Choix...</option>
                                    <option value="Diesel">Diesel</option>
                                    <option value="Essence">Essence</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="transmission" class="form-label">Transmission*</label>
                                <select class="form-select form-control" aria-label="transmission" name="transmission"
                                    required>
                                    <option selected>Choix...</option>
                                    <option value="Manuel">Manuel</option>
                                    <option value="Automatique">Automatique</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="volant" class="form-label">Volant*</label>
                                <select class="form-select form-control" aria-label="volant" name="volant" required>
                                    <option selected>Choix...</option>
                                    <option value="Droite">Droite</option>
                                    <option value="Gauche">Gauche</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="climatissation" class="form-label">Climatisation*</label>
                                <select class="form-select form-control" aria-label="climatisation" name="climatisation"
                                    required>
                                    <option selected>Choix...</option>
                                    <option value="Oui">Oui</option>
                                    <option value="Non">Non</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="prix" class="form-label">Prix*</label>
                                <input type="text" class="form-control" id="prix" name="prix" placeholder="1000000"
                                    value="" required>
                            </div>
                            <div class="mb-3">
                                <label for="negociable" class="form-label">Negociable*</label>
                                <select class="form-select form-control" aria-label="negociable" name="negociable"
                                    required>
                                    <option selected>Choix...</option>
                                    <option value="Oui">Oui</option>
                                    <option value="Non">Non</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="image" class="form-label">Image*</label>
                                <input class="form-control" type="file" id="image" name="image" required accept=".jpg, .png, .jpeg, .svg">
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea class="form-control" placeholder="Inserer une description" id="description"
                                    name="description" style="height: 100px"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="status" class="form-label">Status</label>
                                <select class="form-select form-control" aria-label="status" name="status">
                                    <option value="Publier" selected>Publier</option>
                                    <option value="En Attente">En Attente</option>
                                </select>
                            </div>
                            <button type="submit" class="btn app-btn-primary">Publier</button>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

@if (Session::has('success'))
    <script>
        swal("Good", "{!! Session::get('success') !!}", "success",{
            button: "OK"
        })
    </script>
@endif

@endsection
