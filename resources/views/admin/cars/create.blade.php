@extends('layouts.admin')

@section('admin-title')
Dashbord Admin | CarSend
@endsection

@section('admin-content')
<!--Main container start -->
<main class="ttr-wrapper">
    <div class="container-fluid">
        <div class="db-breadcrumb">
            <h4 class="breadcrumb-title">Ajouter Une voiture</h4>
            <ul class="db-breadcrumb-list">
                <li><a href="{{ route('welcome.index') }}"><i class="fa fa-home"></i>Home</a></li>
                <li>Ajouter Une Voiture</li>
            </ul>
        </div>
        <div class="row">
            <!-- Your Profile Views Chart -->
            <div class="col-lg-12 m-b30">
                <div class="widget-box">
                    <div class="wc-title">
                        <h4> <i class="fa fa-car"></i> &nbsp; Ajouter Une Voiture</h4>
                    </div>
                    <div class="widget-inner">
                        <form method="POST" action="{{ route('auto.store') }}" class="edit-profile m-b30" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="ml-auto">
                                        <h3>1. Basic info</h3>
                                    </div>
                                </div>
                                <div class="form-group col-6">
                                    <label class="col-form-label">Marque</label>
                                    <div>
                                        <input class="form-control" type="text" value="" name="marque">
                                    </div>
                                </div>
                                <div class="form-group col-6">
                                    <label class="col-form-label">Modele</label>
                                    <div>
                                        <input class="form-control" type="text" value="" name="modele">
                                    </div>
                                </div>
                                <div class="form-group col-6">
                                    <label class="col-form-label">Carrosserie</label>
                                    <div>
                                        <input class="form-control" type="text" value="" name="carrosserie">
                                    </div>
                                </div>
                                <div class="form-group col-6">
                                    <label class="col-form-label">Moteur</label>
                                    <div>
                                        <input class="form-control" type="text" value="" name="moteur">
                                    </div>
                                </div>
                                <div class="form-group col-6">
                                    <label class="col-form-label">Killometrage</label>
                                    <div>
                                        <input class="form-control" type="text" value="" name="killometrage">
                                    </div>
                                </div>
                                <div class="form-group col-6">
                                    <label class="col-form-label">Nombre De Place</label>
                                    <div>
                                        <input class="form-control" type="text" value="" name="nombre_place">
                                    </div>
                                </div>
                                <div class="form-group col-6">
                                    <label class="col-form-label">Prix</label>
                                    <div>
                                        <input class="form-control" type="text" value="" name="prix">
                                    </div>
                                </div>
                                <div class="form-group col-6">
                                    <label class="col-form-label">Negociable</label>
                                    <div>
                                        <select class="form-select form-control" aria-label="negociable"
                                            name="negociable">
                                            <option selected>Choix...</option>
                                            <option value="Oui">Oui</option>
                                            <option value="Non">Non</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group col-6">
                                    <label class="col-form-label">Annee</label>
                                    <div>
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
                                </div>

                                <div class="form-group col-6">
                                    <label class="col-form-label">Couleur</label>
                                    <div>
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
                                </div>

                                <div class="form-group col-6">
                                    <label class="col-form-label">Etat</label>
                                    <div>
                                        <select class="form-select form-control" aria-label="etat" name="etat">
                                            <option selected>Choix...</option>
                                            <option value="Neuf">Neuf</option>
                                            <option value="Occasion">Occasion</option>
                                            <option value="Neuf/Occasion">Neuf/Occasion</option>
                                            <option value="Import">Import</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group col-6">
                                    <label class="col-form-label">Carburant</label>
                                    <div>
                                        <select class="form-select form-control" aria-label="carburant"
                                            name="carburant">
                                            <option selected>Choix...</option>
                                            <option value="Diesel">Diesel</option>
                                            <option value="Essence">Essence</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group col-6">
                                    <label class="col-form-label">Transmission</label>
                                    <div>
                                        <select class="form-select form-control" aria-label="transmission"
                                            name="transmission">
                                            <option selected>Choix...</option>
                                            <option value="Manuel">Manuel</option>
                                            <option value="Automatique">Automatique</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group col-6">
                                    <label class="col-form-label">Volant</label>
                                    <div>
                                        <select class="form-select form-control" aria-label="volant" name="volant">
                                            <option selected>Choix...</option>
                                            <option value="Droite">Droite</option>
                                            <option value="Gauche">Gauche</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group col-6">
                                    <label class="col-form-label">Climatisation</label>
                                    <div>
                                        <select class="form-select form-control" aria-label="climatisation"
                                            name="climatisation">
                                            <option selected>Choix...</option>
                                            <option value="Oui">Oui</option>
                                            <option value="Non">Non</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group col-6">
                                    <label class="col-form-label">Ville</label>
                                    <div>
                                        <input class="form-control" type="text" value="" name="ville">
                                    </div>
                                </div>

                                <div class="form-group col-6">
                                    <label class="col-form-label">Status</label>
                                    <div>
                                        <select class="form-select form-control" aria-label="status" name="status">
                                            <option value="Publier" selected>Publier</option>
                                            <option value="En Attente">En Attente</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group col-6">
                                    <label class="col-form-label">Auteur</label>
                                    <div>
                                        <select class="form-select form-control" aria-label="climatisation"
                                        name="user_id">
                                        <option selected>Choix...</option>
                                        @foreach ($users as $user)
                                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                                        @endforeach
                                    </select>
                                    </div>
                                </div>

                                <div class="seperator"></div>

                                <div class="col-12 m-t20">
                                    <div class="ml-auto m-b5">
                                        <h3>2. Description</h3>
                                    </div>
                                </div>
                                <div class="form-group col-12">
                                    <label class="col-form-label">Description</label>
                                    <div>
                                        <textarea class="form-control" name="description"> </textarea>
                                    </div>
                                </div>

                                <div class="seperator"></div>

                                <div class="col-12 m-t20">
                                    <div class="ml-auto m-b5">
                                        <h3>3. Image</h3>
                                    </div>
                                </div>
                                <div class="form-group col-12">
                                    <label class="col-form-label">image</label>
                                    <div>
                                        <input type="file" accept="image/*,.jpg, .png, .jpeg" multiple name="image">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary m-r5">Sauvegarder</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<div class="ttr-overlay"></div>
@endsection

{{-- @section('admin-extra-js')
  <script>
    $(document).ready(function (){
        $('input[type="file"]').imageuploadify();
    });
  </script>
@endsection --}}
