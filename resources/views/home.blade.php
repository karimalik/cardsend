@extends('layouts.main')

@section('title2')
Dashbord | CarSend
@endsection

@section('content-main')
<div class="app-content pt-3 p-md-3 p-lg-4">
    <div class="container-xl">

        <h1 class="app-page-title">Tableau De Bord</h1>

        <div class="app-card alert alert-dismissible shadow-sm mb-4 border-left-decoration mt-5" role="alert">
            <div class="inner">
                <div class="app-card-body p-3 p-lg-4">
                    <h3 class="mb-3">Hello, {{ Auth::user()->name }} ! 👋</h3>
                    <div class="row gx-5 gy-3">
                        <div class="col-12 col-lg-9">

                            <div>
                                Bienvenue sur la plateforme CarSend, première plateforme de vente et
                                achat de véhicule d'occasion et/ou neuf. Mettez votre en vente en cliquant sur le bouton
                                "Ajouter Un Poste".
                            </div>
                        </div>
                        <!--//col-->
                        <div class="col-12 col-lg-3">
                            <a class="btn app-btn-primary" href="#">Ajouter Un Poste</a>
                        </div>
                        <!--//col-->
                    </div>
                    <!--//row-->
                </div>
                <!--//app-card-body-->

            </div>
            <!--//inner-->
        </div>
        <!--//app-card-->

    </div>
    <!--//app-content-->
    @endsection
