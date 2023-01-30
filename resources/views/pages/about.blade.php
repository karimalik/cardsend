@extends('layouts.app')

@section('title')
About-Us : CarSend
@endsection

@section('content')
<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('assets/images/car-14.jpg');"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
            <div class="col-md-9 ftco-animate pb-5">
                <p class="breadcrumbs"><span class="mr-2"><a href="{{ url('/') }}">Accueil <i
                                class="ion-ios-arrow-forward"></i></a></span> <span>A Propos <i
                            class="ion-ios-arrow-forward"></i></span></p>
                <h1 class="mb-3 bread">About Us</h1>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-about">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-md-6 p-md-5 img img-2 d-flex justify-content-center align-items-center"
                style="background-image: url('assets/images/fun.jpg');">
            </div>
            <div class="col-md-6 wrap-about ftco-animate">
                <div class="heading-section heading-section-white pl-md-5">
                    <span class="subheading">A Propos</span>
                    <h2 class="mb-4">Bienvenu Chez CarSend</h2>

                    <p>Première plateforme web de vente et achat de véhicules en ligne au Cameroun.
                        Nous vous facilitons la vente et l'achat de votre automobile. Si vous souhaitez achetez un
                        véhicule d'ocassioin ou neuf en fonction
                        de votre budget, trouvez les meilleurs choix de vehicule sur CarSend , trouvez des centaines de
                        marques et des modèles.
                    </p>
                    <p>
                        Besoins de vendre votre véhicule au Cameroun, n'hesitez pas une seule adresse CarSend Que vous
                        souyez un concessionnaire ou un particulier,
                        vous pouvez vendre votre véhicule.
                        Il vous suffit juste de créer votre compte c'est totalement gartuit et de poster votre vehicule
                        pour sa mise en vente.
                    </p>
                    <p><a href="{{ route('cars.create') }}" class="btn btn-primary py-3 px-4">Vendre Ma Voiture</a></p>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="ftco-section testimony-section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <span class="subheading">Témoignages</span>
                <h2 class="mb-3">Clients Satisfaits</h2>
            </div>
        </div>
        <div class="row ftco-animate">
            <div class="col-md-12">
                <div class="carousel-testimony owl-carousel ftco-owl">
                    <div class="item">
                        <div class="testimony-wrap rounded text-center py-4 pb-5">
                            <div class="user-img mb-2" style="background-image: url('assets/images/avatar1.png')">
                            </div>
                            <div class="text pt-4">
                                <p class="mb-4">Grâce à CarSend j'ai pu vendre mon véhicule en moins d'une semaine.
                                    Merci vraiment a vous!</p>
                                <p class="name">M Thomas Kompissi</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap rounded text-center py-4 pb-5">
                            <div class="user-img mb-2" style="background-image: url('assets/images/avatar4.png')">
                            </div>
                            <div class="text pt-4">
                                <p class="mb-4">
                                    J'étais en difficulté et je ne savais pas comment faire pour vendre mon véhicule,
                                    Mais après avoir posté ma voiture j'ai pu le vendre très facilement.
                                </p>
                                <p class="name">M Wouelick Daruce</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap rounded text-center py-4 pb-5">
                            <div class="user-img mb-2" style="background-image: url('assets/images/avatar2.png')">
                            </div>
                            <div class="text pt-4">
                                <p class="mb-4">
                                    sa été un réel plaisir pour moi d'utiliser la plateforme CarSend, en mois de quelque
                                    jours seulement j'ai pu vendre ma voiture.
                                </p>
                                <p class="name">M Eto Afan</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-intro" style="background-image: url('assets/images/car-7.jpg');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-md-6 heading-section heading-section-white ftco-animate">
                <h2 class="mb-3">Souhaitez Vous Vendre Votre Voiture?</h2>
                <a href="{{ route('cars.create') }}" class="btn btn-primary btn-lg">Vendre Ma Voiture</a>
            </div>
        </div>
    </div>
</section>
@endsection
